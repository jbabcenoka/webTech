<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\EsosasPreces;
use App\Piegadatajs;
use App\Persona;
use App\PardotieUnBojatie;
use App\Adrese;

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
        
        //if (\Auth::check()) {
            if ($id != null && !(session()->has('flower_id') && session()->get('flower_id') == $id)) {
                session()->put('flower_id', $id);
            }

            $zieds = EsosasPreces::find($id);
            $veids = $zieds->ZiedaPuskaVeids;
            $piegveids = Piegadatajs::where('ZiedaPuskaVeids', $veids)->get('CenaParVienu');
            $cena = $piegveids[0]->CenaParVienu;
            if (session()->has('flower_id')){
               // return $cena;
                return view('order_create',['cena' =>$cena,'flower' => EsosasPreces::findOrFail(session()->get('flower_id'))]);
            }else {return view('order_create');}       
        //}
        //else{
         //   return redirect ('/login');
        //}
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $rules = array(
            'name' => 'required|string|min:2|max:29',
            'surname' => 'required|string|min:2|max:29',
            'perskods' => 'required|string|min:12|max:12',
            'city' => 'required|string|min:2|max:19',
            'street' => 'required|string|min:2|max:19',
            'apartment' => 'required|integer',
            'phone' => 'required|integer',
        ); 
        $this->validate($request, $rules); 
        
        
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
        $persona = new Persona();
        $name = $request->name;
        $surname = $request->surname;
        $perskods = $request->perskods;
        $phone = $request->phone;
        $lastAdress = Adrese::latest()->get('id');
         $persona->PersKods=$perskods;
        $persona->Vards=$name;
        $persona->OtraisVards=NULL;
        $persona->Uzvards=$surname;
        $persona->Telefons=$phone;
        $persona->adrese_id=$lastAdress;
        $persona->save();
        
        //pardotie
        $pardotie = new PardotieUnBojatie();
        //partijaskods 
        $pardotie->Skaits = $request->skaits;
        $pardotie->PersKods=$perskods;
        $pardotie->Datums = now();
        $pardotie->PartijasKods = $request->partijaskods;
        $pardotie->ZiedaPuskaVeids = $request->ZiedaPuskaVeids;
        $pardotie->BooleanPard = true;
        $pardotie->save();
       
    
        return 0;
   
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
