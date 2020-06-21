<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Gallery;
use Response;
use Image;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Gallery::all();
        return view('gallery',['data'=>$data]);
    }


    public function store(Request $request)
    {
        $var = new Gallery;
        $var->users_id = 1;
        $var->name = "name";

        $file = $request->file('image');
        $img = Image::make($file); ////Bildes lasisana
        Response::make($img->encode('jpeg'));

        $var->image = $img;

        $var->save();


        return redirect('/gallery');


    }


    public function upload()
    {
        ///

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
