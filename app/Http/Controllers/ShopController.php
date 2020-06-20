<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ZieduGlabApstakli;
use App\EsosasPreces;
use Illuminate\Support\Facades\Validator;
use App\PardotieUnBojatie;
use App\VeikalaDarbinieks;
use App\Persona;
use App\Piegadatajs;
use App\Amats;
use App\Adrese;
class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $glab_apst= ZieduGlabApstakli::orderBy('ZiedaPuskaVeids')->get();
        $flowers= EsosasPreces::orderBy('ZiedaPuskaVeids')->get();
        return view('shop-users', array('flowers'=>$flowers, 'glab_apst'=>$glab_apst));
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
        $validator = Validator::make($request->all(), [
                    'count' => 'required|integer|min:0', 
         ]);
        if ($validator->fails()) {
            return redirect('/shop-orders')->withErrors($validator);
        }
        
        $new_count = $request->count;
        $z = EsosasPreces::where('ZiedaPuskaVeids', $request->veids)->get();
  
        foreach($z as $d){
            $d->ZieduSkaits = $new_count;
            $d->save();
        }
       
        
        return redirect('/shop-orders');
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $preces= PardotieUnBojatie::orderBy('users_id')->get();
        $cena = Piegadatajs::orderBy('id')->get();
        $adrese = Adrese::orderBy('id')->get();
        $persona = Persona::orderBy('id')->get();
        
        return view('users-orders',array('data'=>$preces, 'persona'=>$persona, 'adrese'=>$adrese, 'cena'=>$cena));
    }
    public function showEmploqees()
    {
        $darb= VeikalaDarbinieks::orderBy('id')->get();
        $persona = Persona::orderBy('id')->get();
        $adrese = Adrese::orderBy('id')->get();
        $amats = Amats::orderBy('id')->get();
        $amats_nos = Amats::pluck('AmataNosaukums');
        return view('emploqees',array('data'=>$darb, 'persona'=>$persona, 'adrese'=>$adrese, 'amats'=>$amats, 'amats_nos'=>$amats_nos ));
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
    public function update(request $request)
    {
        $order= PardotieUnBojatie::find($request->id);
        if($request->fulfilled ==1){
        $order->Fulfilled=true;
        } else $order->Fulfilled=false;
        $order->save();
        return redirect('/users-orders');
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
