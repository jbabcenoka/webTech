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
<<<<<<< HEAD
                                   <h4>  Send flowers to Riga and Latvia – are very easy!</h4>
                                   <p>We have established the most convenient online floral 
                                   shop with delivery in Riga. We know what others offer send 
                                   flowers in riga and understand what a real modern online floral
                                   shop must offer. In this online shop, we have made our dream 
                                   come true, and all of your needs will be fulfilled: professional
                                   florists with a 10-year experience, delivery of only fresh flowers, 
                                   24-hour floristic and delivery services for send flowers to Riga 
                                   and Latvia. We focus on the quality of our work and do everything
                                   possible to make you come back to us again to order sending
                                   flowers into Riga or anywhere in Latvia.</p>
                                   <h4>Delivery</h4>
                                   <p>1. Delivery using courier across Riga  costs EUR 0.00.<br>
=======
                                   <h4>  {{ __('messages.Send_flowers') }}</h4>
                                   <p> {{  __('messages.About_text') }}</p>
                                   <h4>{{ __('messages.Delivery') }}</h4>
                                   <p>{{ __('messages.Delivery_one') }}<br>
>>>>>>> 63a5ddf4b6fea96163ac559c792098fc8dc68b03
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