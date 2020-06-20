@extends('layouts.app')
@section('content')
<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
<div class="container">
    <div class="row">
        <img src="{{  url('/images/wallpaper.jpg') }}" width="100%" height="300px" alt="foto" >
    </div>
    <br>

    <div class="row">
            <div class="col-sm">
                <div class="card">
                        <h2 class="list-group-item list-group-item-primary">{{ __('messages.filter_box') }}</h2>
                        <div class="card-body">
                            <div class="second" id="tmp">
                               
                                {!! Form::open(array('action'=>'EsosasPrecesController@store')) !!} 
                                <input type="hidden" name="tmp" value=1 />
                                {{Form::submit( __('messages.augosa') ,['id'=>'create_orderr'])}}
                                {!!Form::close()!!}
                                {!! Form::open(array('action'=>'EsosasPrecesController@store')) !!} 
                                <input type="hidden" name="tmp" value=2 />
                                {{Form::submit(__('messages.dilstosa') ,['id'=>'create_orderr'])}}
                                {!!Form::close()!!}
                                <br>
                                <label for="search" id="label-for-search">{{ __('messages.flower') }}:</label>      
                                <input type="search" id="search" placeholder= '{{ __('messages.find_zieds') }}' oninput="showproducts({{$flowers}})" style="width:75%" >
                         
                            </div>
                        </div>
                </div>
                <br>
                <br>
                @if(Auth::user())
                <div class="card">
                    <h2 class="list-group-item list-group-item-primary">{{ __('messages.top_for_you') }}</h2>
                    @isset($top)
                    
                    @foreach($top as $t)
                    <h3><strong><i>
                        @switch($t->ZiedaPuskaVeids) 
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
                            </i></strong></h3>
                    <h4><i>{{ __('messages.number_of_sold') }} {{$t->Skaits}}</i></h4>
                    
                        @switch($t->ZiedaPuskaVeids) 
                            @case('Frezijas') <img src="{{  url('/images/frezijas.jpg') }}" alt="foto" class="third" > @break
                            @case('Astromerijas') <img src="{{  url('/images/astromerijas.jpg') }}" alt="foto" class="third"> @break
                            @case('Gerbazas') <img src="{{  url('/images/gerbazas.jpg') }}"  alt="foto" class="third" > @break
                            @case('Hortenzijas') <img src="{{  url('/images/hortenzijas.jpg') }}"  alt="foto" class="third"> @break
                            @case('Krizantemas') <img src="{{  url('/images/hrizantemas.jpg') }}"  alt="foto" class="third"> @break
                            @case('Lavanda') <img src="{{  url('/images/lavandas.jpg') }}"  alt="foto" class="third"> @break
                            @case('Lilijas') <img src="{{  url('/images/lilija.jpg') }}" alt="foto" class="third"> @break
                            @case('Nelkes') <img src="{{  url('/images/nelkes.jpg') }}"  alt="foto" class="third"> @break
                            @case('Orhidejas') <img src="{{  url('/images/orhidejas.jpg') }}" alt="foto" class="third" > @break
                            @case('Peonijas') <img src="{{  url('/images/peonijas.jpg') }}" alt="foto" class="third"> @break
                            @case('Puskis Flora') <img src="{{  url('/images/flora.jpg') }}" alt="foto" class="third"> @break
                            @case('Puskis Luiza') <img src="{{  url('/images/luiza.jpg') }}" alt="foto" class="third"> @break
                            @case('Puskis Maja') <img src="{{  url('/images/maija.jpg') }}"  alt="foto" class="third"> @break
                            @case('Puskis Milestiba') <img src="{{  url('/images/milestiba.jpg') }}" alt="foto" class="third" > @break
                            @case('Puskis Pavasara') <img src="{{  url('/images/pavasara.jpg') }}"  alt="foto" class="third"  > @break
                            @case('Puskis Vasara') <img src="{{  url('/images/vasara.jpg') }}"  alt="foto" class="third"> @break
                            @case('Puskis Vesture') <img src="{{  url('/images/vesture.jpg') }}"  alt="foto" class="third" > @break
                            @case('Puskis Ziema') <img src="{{  url('/images/ziema.jpg') }}"  alt="foto" class="third"> @break
                            @case('Rozes') <img src="{{  url('/images/rozes.jpg') }}"  alt="foto" class="third"> @break
                            @case('Tulpes') <img src="{{  url('/images/tulpes.jpg') }}" alt="foto" class="third"> @break
                        @endswitch
                    
                    @foreach($flowers as $f)
                        @if($f->ZieduSkaits!=0)
                            @if($f->ZiedaPuskaVeids == $t->ZiedaPuskaVeids)
                            <a type="button" id="top"  href="{{ action('OrderController@create', $f->id)}}"> {{ __('messages.buy_more_this') }} </a>
                            @endif 
                        @endif
                    @endforeach
                        
                    @endforeach
                    
                    @endisset
                </div>
                @endif
            </div>
            <div class="col-sm-8">
                <div class="card">
                    <h2 class="list-group-item list-group-item-primary">{{ __('messages.flowers') }}</h2>

                    @foreach($cena as $c)
                    
                        @foreach ($flowers as $flower)
                            
                            @if($flower->ZiedaPuskaVeids == $c->ZiedaPuskaVeids)
                                <div class="list-group-item" id="{{$flower->ZiedaPuskaVeids}}">
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
                                                     @switch($flower->ZiedaPuskaVeids) 
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
                                        
                                                    <h5>{{ __('messages.count_of_flowers') }}: {{$flower->ZieduSkaits}}</h5>  
                                                    @foreach ($glab_apst as $glab)  
                                                     @if ($glab->ZiedaPuskaVeids == $flower->ZiedaPuskaVeids)
                                                           <h5>{{ __('messages.humidity') }} : {{$glab->Mitrums}}</h5>
                                                           <h5>{{ __('messages.temperature') }} : {{$glab->Mitrums}}</h5>
                                                      @endif
                                                    @endforeach
                                                    <h5>{{ __('messages.price') }}: 
                                                        @foreach ($cena as $c)  
                                                     @if ($c->ZiedaPuskaVeids == $flower->ZiedaPuskaVeids)
                                                           {{$c->CenaParVienu}}
                                                      @endif
                                                    @endforeach
                                                        {{ __('messages.EUR_per_one') }}</h5>  
                                                    <br>
                                                    @if($flower->ZieduSkaits!=0)
                                                        <a type="button" id='create_order'  href="{{ action('OrderController@create', $flower->id)}}"> {{ __('messages.buy') }} </a>
                                                    @elseif ($flower->ZieduSkaits==0)
                                                         <a type="button"  style="background-color: #e7e7e7; color: black;border: none;padding: 16px 32px;text-decoration: none;margin: 4px 2px;cursor: pointer;">{{ __('messages.buy') }}</a>
                                                    
                                                    @endif
                                    </div>
                                </div>
                                @break
                            
                            @endif
                        @endforeach    
                    @endforeach
                   
                </div>   
            </div>

        </div>
    </div>
</div>
<script>
    let y=0;
    function showproducts(flowers){

        let result = flowers.map(({ ZiedaPuskaVeids }) => ZiedaPuskaVeids)
        var name = document.getElementById("search").value;

        for(let i=0; i<20; i++){
            var container = document.getElementById(result[i]); 
            var n =result[i].toLowerCase();
            if(container.hidden==false && name.length>=1){
                if(result[i].toLowerCase().includes(name)) { container.hidden=false;}
                else container.hidden=true;
            }
            if(name.length<1){
                for(let i=0; i<20; i++){
                    var container = document.getElementById(result[i]);
                    container.hidden=false;
                }
            }
        }
    }
    function maina(i){  
        if(i!=3) y = i;
        else return y;
        
    }

    funtion parbaude(){
        return y;
    }

</script>
@endsection