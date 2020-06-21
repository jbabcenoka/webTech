@extends('layouts.app')
@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
<div class="container">
    <div class="row">
        <div class="card">
        </div>
        <div col-8>
            @foreach($data as $d)
            <img alt="{{ $d->name }}" width="320px" height="226px" class="first"
             src="data:image/jpeg;charset=utf8;base64,{{ base64_encode($d->image) }}"/>
            @endforeach
        </div>
        @if(Auth::check() && Auth::user()->role ==true) 
        <div col-sm-2>
            
            <form action="{{"/gallery/images"}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH') }}
            <label><i>{{ __('messages.New_galary_image') }}</i></label>
            <div class="input-group">
                <div clas="custom-file">
                    <input type="file" name="image" class="custom-file-input">
                    <label class="custom-file-label">{{ __('messages.Choose_file') }}</label>
                    
                </div>
                
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary btn-lg">{{ __('messages.Save') }}</button>
            
            </form>
        </div>
        @endif
                        
    </div>
</div>
    

@endsection