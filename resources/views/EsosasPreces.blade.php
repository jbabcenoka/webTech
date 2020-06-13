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
                                                <h3>
                                                    {{$flower->ZiedaPuskaVeids }}
                                                </h3>
                                             <h4>Pieejamais skaits: {{$flower->ZieduSkaits}}</h4>  
                                             @foreach ($glab_apst as $glab)  
                                              @if ($glab->ZiedaPuskaVeids == $flower->ZiedaPuskaVeids)
                                                    <h4>Mitrums: {{$glab->Mitrums}}</h4>
                                                    <h4>Temperatura: {{$glab->Mitrums}}</h4>
                                               @endif
                                             @endforeach
                                             
                                            </div>
                             @endforeach       
                        </div>
                           
                    </div>
                </div>
</div>
@endsection