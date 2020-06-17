<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\EsosasPreces;
use App\ZieduGlabApstakli;
use Illuminate\Http\Request;

class EsosasPrecesController extends Controller
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
        return view('EsosasPreces', array('flowers'=>$flowers, 'glab_apst'=>$glab_apst));
    }


    public function create()
    {
        
        return view('order_create');
    }

 
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }


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
