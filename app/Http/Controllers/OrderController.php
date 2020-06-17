<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\EsosasPreces;
use App\Piegadatajs;
use App\Persona;
use App\PardotieUnBojatie;
use App\Adrese;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id = null)
    {
        
        if (Auth::check()) {
            if ($id != null && !(session()->has('flower_id') && session()->get('flower_id') == $id)) {
                session()->put('flower_id', $id);
            }

            $zieds = EsosasPreces::find($id);
            $veids = $zieds->ZiedaPuskaVeids;
            $piegveids = Piegadatajs::where('ZiedaPuskaVeids', $veids)->get('CenaParVienu');
            $kods = $zieds->PartijasKods;
            $cena = $piegveids[0]->CenaParVienu;
            $esamiba = $zieds->ZieduSkaits;
            if (session()->has('flower_id')){
               // return $cena;
                return view('order_create',['cena' =>$cena,'kods'=>$kods,'esamiba'=>$esamiba,'flower' => EsosasPreces::findOrFail(session()->get('flower_id'))]);
            }else {
                return view('order_create');
                
            }       
        }
        else{
            return redirect ('/login');
        }
    }


    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
                    
                    'name' => 'required|string|min:2|max:29',
                    'surname' => 'required|string|min:2|max:29',
                    'perskods' => 'required|string|min:12|max:12',
                    'city' => 'required|string|min:2|max:19',
                    'street' => 'required|string|min:2|max:19',
                    'apartment' => 'required|integer',
                    'phone' => 'required|integer',
                    'count' => 'required|integer|min:1|max:'.$request->esamiba,
                ]);

        if ($validator->fails()) {
            return redirect('/'.$request->ziedaid)->withErrors($validator);
        }
        $new_count = $request->esamiba - $request->count;
        $z = EsosasPreces::where('ZiedaPuskaVeids', $request->veids)->get();
  
        foreach($z as $d){
            $d->ZieduSkaits = $new_count;
            $d->save();
        }
       
      
        //adrese
        $adrese = new Adrese();
        $pilseta=$request->city;
        $street=$request->street;
        $apartment=$request->apartment;
        $adrese->Pilseta=$pilseta;
        $adrese->Iela=$street;
        $adrese->MajasN=$apartment;
        $adrese->save();
        //persona
        $name = $request->name;
        $surname = $request->surname;
        $perskods = $request->perskods;
        $phone = $request->phone;
        $lastAdress = Adrese::latest()->first()->id;
        $finduser = Persona::where('telefons', $request->phone)->first();
        $findPK = Persona::where('PersKods', $request->$perskods)->first();
        if (!$finduser && !$findPK) {
            $persona = new Persona();
            $persona->PersKods=$perskods;
            $persona->Vards=$name;
            $persona->OtraisVards=NULL;
            $persona->Uzvards=$surname;
            $persona->Telefons=$phone;
            $persona->adrese_id=$lastAdress;
            $lastperson = Persona::latest()->first()->id;
            $persona->save();
        }
        
       
        //pardotie
        $pardotie = new PardotieUnBojatie();
        //partijaskods 
        $pardotie->Skaits = $request->count;
        $pardotie->persona_id=$lastperson;
        $pardotie->Datums = now();
        $pardotie->PartijasKods = $request->kods;
        $pardotie->ZiedaPuskaVeids = $request->veids;
        $pardotie->BooleanPard = true;
        $pardotie->users_id = Auth::user()->id;
        $pardotie->save();
        $id = $pardotie->id;
        session()->push('products',$id);
        
        

        return redirect('/allorders/'.Auth::user()->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    
    public function details(Request $request){
       return redirect('/');
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
