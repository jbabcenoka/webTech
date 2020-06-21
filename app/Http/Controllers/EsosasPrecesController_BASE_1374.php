<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\EsosasPreces;
use App\ZieduGlabApstakli;
use App\PardotieUnBojatie;
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
        $pard = PardotieUnBojatie::orderBy('Skaits')->get();
        $user = Auth::user();
        $flag=0;
        $flag2=0;
        $top = PardotieUnBojatie::where('id', 1)->get();
        if(Auth::user()){
        foreach($pard as $p){
            if($p->users_id == $user->id){
                if($flag==0) {$maxValueId = $p; $flag=1;}
                if($flag==1) if($p->Skaits > $maxValueId->Skaits) $maxValueId =$p;
                $flag2=1;
            } 
        }
        if($flag2==1) $top= PardotieUnBojatie::where('id', $maxValueId->id)->get();
        }
        
        return view('EsosasPreces', array('flowers'=>$flowers, 'glab_apst'=>$glab_apst, 'top'=>$top));
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
