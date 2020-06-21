@extends('layouts.app')
@section('content')
<div class="container">

    <br>
    <p hidden='true'>{{$i=0}}</p>
        <div class="row">
                    
                    <div class="col-sm-8">
                        <div class="card">
                            <h2 class="list-group-item list-group-item-primary"> {{ __('messages.all_count_of_flowers') }}</h2>
                             @foreach ($flowers as $d) 
                                            <div class="list-group-item" id="{{$d->ZiedaPuskaVeids}}">
                                                <div class='first'>
                                                    @switch($d->ZiedaPuskaVeids) 
                                                        @case('Frezijas') <img src="{{  url('/images/frezijas.jpg') }}" alt="foto" class="ziedi" > @break
                                                        @case('Astromerijas') <img src="{{  url('/images/astromerijas.jpg') }}" alt="foto" class="ziedi"> @break
                                                        @case('Gerbazas') <img src="{{  url('/images/gerbazas.jpg') }}"  alt="foto" class="ziedi" > @break
                                                        @case('Hortenzijas') <img src="{{  url('/images/hortenzijas.jpg') }}"  alt="foto" class="ziedi"> @break
                                                        @case('Krizantemas') <img src="{{  url('/images/hrizantemas.jpg') }}"  alt="foto" class="ziedi"> @break
                                                        @case('Lavanda') <img src="{{  url('/images/lavandas.jpg') }}"  alt="foto" class="ziedi"> @break
                                                        @case('Lilijas') <img src="{{  url('/images/lilija.jpg') }}" alt="foto" class="ziedi"> @break
                                                        @case('Nelkes') <img src="{{  url('/images/nelkes.jpg') }}"  alt="foto" class="ziedi"> @break
                                                        @case('Orhidejas') <img src="{{  url('/images/orhidejas.jpg') }}" alt="foto" class="ziedi" > @break
                                                        @case('Peonijas') <img src="{{  url('/images/peonijas.jpg') }}" alt="foto" class="ziedi"> @break
                                                        @case('Puskis Flora') <img src="{{  url('/images/flora.jpg') }}" alt="foto" class="ziedi"> @break
                                                        @case('Puskis Luiza') <img src="{{  url('/images/luiza.jpg') }}" alt="foto" class="ziedi"> @break
                                                        @case('Puskis Maja') <img src="{{  url('/images/maija.jpg') }}"  alt="foto" class="ziedi"> @break
                                                        @case('Puskis Milestiba') <img src="{{  url('/images/milestiba.jpg') }}" alt="foto" class="ziedi" > @break
                                                        @case('Puskis Pavasara') <img src="{{  url('/images/pavasara.jpg') }}"  alt="foto" class="ziedi"  > @break
                                                        @case('Puskis Vasara') <img src="{{  url('/images/vasara.jpg') }}"  alt="foto" class="ziedi"> @break
                                                        @case('Puskis Vesture') <img src="{{  url('/images/vesture.jpg') }}"  alt="foto" class="ziedi" > @break
                                                        @case('Puskis Ziema') <img src="{{  url('/images/ziema.jpg') }}"  alt="foto" class="ziedi"> @break
                                                        @case('Rozes') <img src="{{  url('/images/rozes.jpg') }}"  alt="foto" class="ziedi"> @break
                                                        @case('Tulpes') <img src="{{  url('/images/tulpes.jpg') }}" alt="foto" class="ziedi"> @break
                                                    @endswitch
                                                </div>
                                                <div class='second' >
                                                     <h2>
                                                         @switch($d->ZiedaPuskaVeids) 
                                                        @case('Frezijas') {{ __('messages.Frezijas') }} @break
                                                        @case('Astromerijas') {{ __('messages.Astromerijas') }}  @break
                                                        @case('Gerbazas'){{ __('messages.Gerbazas') }} @break
                                                        @case('Hortenzijas') {{ __('messages.Hortenzijas') }} @break
                                                        @case('Krizantemas') {{ __('messages.Krizantemas') }}  @break
                                                        @case('Lavanda') {{ __('messages.Lavanda') }}  @break
                                                        @case('Lilijas'){{ __('messages.Lilijas') }} @break
                                                        @case('Nelkes') {{ __('messages.Nelkes') }} @break
                                                        @case('Orhidejas'){{ __('messages.Orhidejas') }} @break
                                                        @case('Peonijas'){{ __('messages.Peonijas') }} @break
                                                        @case('Puskis Flora'){{ __('messages.Puskis_Flora') }} @break
                                                        @case('Puskis Luiza') {{ __('Puskis_Luiza') }}  @break
                                                        @case('Puskis Maja'){{ __('messages.Puskis_Maja') }}  @break
                                                        @case('Puskis Milestiba') {{ __('messages.Puskis_Milestiba') }}  @break
                                                        @case('Puskis Pavasara'){{ __('messages.Puskis_Pavasara') }} @break
                                                        @case('Puskis Vasara'){{ __('messages.Puskis_Vasara') }} @break
                                                        @case('Puskis Vesture') {{ __('messages.Puskis_Vesture') }}  @break
                                                        @case('Puskis Ziema') {{ __('messages.Puskis_Ziema') }}  @break
                                                        @case('Rozes'){{ __('messages.Rozes') }} @break
                                                        @case('Tulpes') {{ __('messages.Tulpes') }} @break
                                                    @endswitch
                                                    </h2>
                                                    <br>
                                                    <br>
                                                    <h4>{{ __('messages.count_of_flowers') }}: 
                                                        {{$d->ZieduSkaits }}
                                                    </h4>
                                                    <br>
                                                    
                                                    {!! Form::open(array('action'=>'ShopController@store')) !!}
                                                    <div class="form-group">
                                                        <h4><i>{{Form::label('count', __('messages.new_count_of_flowers'))}}</i></h4>
                                                        {{Form::text('count','',['class'=>'form-control','placeholder'=>__('messages.new_count_of_flowers')])}}
                                                        @if ($errors->has('count'))
                                                        <span >
                                                            <strong>{{ $errors->first('count') }}</strong>
                                                        </span>
                                                        @endif 
                                                    </div>
                                                    <input type="hidden" name="id" value="{{$d->id}}" />
                                                     <input type="hidden" name="veids" value="{{$d->ZiedaPuskaVeids}}" />
                                                    {{Form::submit( __('messages.Confirm'),['class'=>'btn btn-primary'])}}
                                                    {!! Form::close() !!}
                                                   
                                                   </div>
                                            </div>
                             @endforeach       
                            
                        </div>
                    </div>
            
         
                            
                            
        </div>
</div>
@endsection