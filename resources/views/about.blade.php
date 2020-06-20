@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <img src="{{  url('/images/wallpaper.jpg') }}" width="100%" height="300px" alt="foto" >
    </div>
    <br>
        <div class="row">
                    <div class="col-sm">
                        <div class="card">
                              <h2 class="list-group-item list-group-item-primary">{{ __('messages.about') }}</h2>
                               <div class="card-body">
                                   <h4>  {{ __('messages.Send_flowers') }}</h4>
                                   <p> {{  __('messages.About_text') }}</p>
                                   <h4>{{ __('messages.Delivery') }}</h4>
                                   <p>{{ __('messages.Delivery_one') }}<br>
                                   </p>
                                   {{ __('messages.Hesitate') }}
                                   <br>
                                   <br>
                                    {{ __('messages.Address') }}:  Brīvības iela 62, Vidzemes priekšpilsēta, Rīga, LV-1012 <br>
                                    {{ __('messages.email') }}: flowerRiga@gmail.com <br>
                                    {{ __('messages.Phone') }}: +371 28861482
                                </div>
                        </div>
                    </div>
                  
                    </div>
                </div>
</div>
@endsection