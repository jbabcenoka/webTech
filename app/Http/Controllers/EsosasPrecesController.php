<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\EsosasPreces;
use App\ZieduGlabApstakli;
use App\Pardotie;
use App\Piegadatajs;
use Illuminate\Http\Request;

class EsosasPrecesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $glab_apst= ZieduGlabApstakli::orderBy('ZiedaPuskaVeids')->get();
        $cena = Piegadatajs::orderBy('ZiedaPuskaVeids')->get();
        $flowers= EsosasPreces::orderBy('ZiedaPuskaVeids')->get();
        $pard = Pardotie::orderBy('Skaits')->get();
        $user = Auth::user();
        $flag=0;
        $flag2=0;
        $top = Pardotie::where('id', Auth::user())->get();
        if(Auth::user()){
            foreach($pard as $p){
                if($p->users_id == $user->id){
                    if($flag==0) {$maxValueId = $p; $flag=1;}
                    if($flag==1) if($p->Skaits > $maxValueId->Skaits) $maxValueId =$p;
                    $flag2=1;
                }
            }
            if($flag2==1) $top= Pardotie::where('id', $maxValueId->id)->get();
        }


        /*Cenu maina */
        if(!is_null($request->tmp)){
            if($request->tmp==1) $cena = $cena->sortBy('CenaParVienu');
            if($request->tmp==2) $cena = $cena->sortByDesc('CenaParVienu');}
        else $request->tmp=0;
        return view('EsosasPreces', array('flowers'=>$flowers, 'glab_apst'=>$glab_apst, 'top'=>$top, 'cena'=>$cena, 'tmp'=>$request->tmp));
    }

    public function create()
    {

        return view('order_create');
    }






    public function store(request $request) ////Augosa/Dilstosa
    {
        $glab_apst= ZieduGlabApstakli::orderBy('ZiedaPuskaVeids')->get();
        $cena = Piegadatajs::orderBy('ZiedaPuskaVeids')->get();
        $flowers= EsosasPreces::orderBy('ZiedaPuskaVeids')->get();
        $pard = Pardotie::orderBy('Skaits')->get();
        $user = Auth::user();
        $flag=0;
        $flag2=0;
        $top = Pardotie::where('id', Auth::user())->get();
        if(Auth::user()){
            foreach($pard as $p){
                if($p->users_id == $user->id){
                    if($flag==0) {$maxValueId = $p; $flag=1;}
                    if($flag==1) if($p->Skaits > $maxValueId->Skaits) $maxValueId =$p;
                    $flag2=1;
                }
            }
            if($flag2==1) $top= Pardotie::where('id', $maxValueId->id)->get();
        }


        /*Cenu maina */
        if(!is_null($request->tmp)){
            if($request->tmp==1) $cena = $cena->sortBy('CenaParVienu');
            if($request->tmp==2) $cena = $cena->sortByDesc('CenaParVienu');}
        else $request->tmp=0;

        return view('EsosasPreces', array('flowers'=>$flowers, 'glab_apst'=>$glab_apst, 'top'=>$top, 'cena'=>$cena, 'tmp'=>$request->tmp));

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
