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
                              <h2 class="list-group-item list-group-item-primary">Filter box</h2>
                               <div class="card-body">
                                   
                                </div>
                        </div>
                        <div class="card-body">
                            aalalla
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="card">
                             <h2 class="list-group-item list-group-item-primary">Flowers</h2>
                             @foreach ($flowers as $flower) 
                                            <div class="list-group-item">
                                                <div class='first'>
                                                    @switch($flower->ZiedaPuskaVeids) 
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
                                                        {{$flower->ZiedaPuskaVeids }}
                                                    </h2>
                                                    <br>
                                                    <h5>Pieejamais skaits: {{$flower->ZieduSkaits}}</h5>  
                                                    @foreach ($glab_apst as $glab)  
                                                     @if ($glab->ZiedaPuskaVeids == $flower->ZiedaPuskaVeids)
                                                           <h5>Mitrums: {{$glab->Mitrums}}</h5>
                                                           <h5>Temperatura: {{$glab->Mitrums}}</h5>
                                                      @endif
                                                    @endforeach
                                                    
                                                    <br>
                                                    <a type="button" id='create_order'  href="{{ action('OrderController@create', $flower->id)}}"> Buy </a>
                                                </div>
                                            </div>
                             @endforeach       
                        </div>
                           
                    </div>
                </div>
</div>
@endsection