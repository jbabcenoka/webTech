<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Adrese;
use App\VeikalaDarbinieks;
use App\Persona;
use App\Amats;
use Illuminate\Support\Facades\Validator;

class VeikalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('about');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
                    'phone' => 'required|integer',
                    'perskods' => 'required|string|min:12|max:12',
                    'city' => 'required|string|min:2|max:19',
                    'street' => 'required|string|min:2|max:19',
                    'apartment' => 'required|integer|min:1',
                    'amats' => 'required',
                    'alga' => 'required|min:1|numeric',
                    'atval_from' => 'required|after:today',
                    'atval_to' => 'required||after:atval_from',
        );
        $this->validate($request, $rules); 
        
        //adrese
        $adrese= Adrese::orderBy('id')->get();
        $flag=false;
        $pilseta=$request->city;
        $street=$request->street;
        $apartment=$request->apartment;
        foreach($adrese as $a){
            if (($a->Pilseta == $pilseta )  && ($a->Iela == $street) && ($apartment == $a->MajasN )) {
                $lastAdress = $a->id;
                $flag=true;
            }
        } 
        if (!$flag) {
            $adrese = new Adrese();
            $adrese->Pilseta=$pilseta;
            $adrese->Iela=$street;
            $adrese->MajasN=$apartment;
            $adrese->save();
            $lastAdress = Adrese::latest()->first()->id;
        } 
        
        //persona
        $name = $request->name;
        $surname = $request->surname;
        $perskods = $request->perskods;
        $phone = $request->phone;
        
        
        
        $persona = new Persona();
        $persona->PersKods=$perskods;
        $persona->Vards=$name;
        $persona->OtraisVards=NULL;
        $persona->Uzvards=$surname;
        $persona->Telefons=$phone;
        $persona->adrese_id=$lastAdress;
        $persona->save();
        $lastperson = Persona::latest()->first()->id;
        
        
        //veikalaDarbinieks
        $darb = new VeikalaDarbinieks();
        $darb->DarbaAlga = $request->alga;
        $darb->AtvalinajumaSakums = $request->atval_from;
        $darb->AtvalinajumaBeigas = $request->atval_to;
        $darb->Persona_id = $lastperson;
        $darb->Amats_id = $request->amats;
        $darb->save();
        return redirect('/emploqees');
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
         $darbinieks = VeikalaDarbinieks::find($id);
         $darbinieks = $darbinieks->delete();
         return redirect('/emploqees');
    }
}
