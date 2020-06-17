<div>@extends('layouts.app')
@section('content')
<script type="application/javascript">
    function validate(){
        var count = ($("#change_me").val());
        if(count>=0) summa();
        else {
            document.getElementById("total-price").innerHTML = "Total: 0.00 €";
        }
    }
    $(document).ready(function () {
        $("#change_me").change(function () {
            validate();
        });
    });
    
    function summa(){
       var days = $("#change_me").val();
       total =days*{{$cena}};
       total = Number.parseFloat(total).toFixed(2);
       document.getElementById("total-price").innerHTML = "Total:  "+total+" €";
    }
</script>
<div class="container">
    <div class="row">
            <div class="col-sm">
                <div class="card">
                    <div class="list-group-item list-group-item-primary"><h4>Order information</h4></div>
                    
                        <h3> {{$flower->ZiedaPuskaVeids}} </h3>
                  <div>   Count in shop: {{$flower->ZieduSkaits}} </div>
                    <div id="total-price">Total: {{$cena}} €</div>
                    @switch($flower->ZiedaPuskaVeids) 
                        @case('Frezijas') <img src="{{  url('/images/frezijas.jpg') }}" alt="foto"  class="photo"> @break
                        @case('Astromerijas') <img src="{{  url('/images/astromerijas.jpg') }}" alt="foto"  class="photo"> @break
                        @case('Gerbazas') <img src="{{  url('/images/gerbazas.jpg') }}"  alt="foto" cclass="photo"> @break
                        @case('Hortenzijas') <img src="{{  url('/images/hortenzijas.jpg') }}"  alt="foto"  class="photo"> @break
                        @case('Krizantemas') <img src="{{  url('/images/hrizantemas.jpg') }}"  alt="foto"  class="photo"> @break
                        @case('Lavanda') <img src="{{  url('/images/lavandas.jpg') }}"  alt="foto"  class="photo"> @break
                        @case('Lilijas') <img src="{{  url('/images/lilija.jpg') }}" alt="foto"  class="photo"> @break
                        @case('Nelkes') <img src="{{  url('/images/nelkes.jpg') }}"  alt="foto" class="photo"> @break
                        @case('Orhidejas') <img src="{{  url('/images/orhidejas.jpg') }}" alt="foto" class="photo"> @break
                        @case('Peonijas') <img src="{{  url('/images/peonijas.jpg') }}" alt="foto"  class="photo"> @break
                        @case('Puskis Flora') <img src="{{  url('/images/flora.jpg') }}" alt="foto"  class="photo"> @break
                        @case('Puskis Luiza') <img src="{{  url('/images/luiza.jpg') }}" alt="foto"  class="photo"> @break
                        @case('Puskis Maja') <img src="{{  url('/images/maija.jpg') }}"  alt="foto" class="photo"> @break
                        @case('Puskis Milestiba') <img src="{{  url('/images/milestiba.jpg') }}" alt="foto"  class="photo"> @break
                        @case('Puskis Pavasara') <img src="{{  url('/images/pavasara.jpg') }}"  alt="foto"  class="photo"> @break
                        @case('Puskis Vasara') <img src="{{  url('/images/vasara.jpg') }}"  alt="foto" class="photo"> @break
                        @case('Puskis Vesture') <img src="{{  url('/images/vesture.jpg') }}"  alt="foto"  class="photo"> @break
                        @case('Puskis Ziema') <img src="{{  url('/images/ziema.jpg') }}"  alt="foto" class="photo"> @break
                        @case('Rozes') <img src="{{  url('/images/rozes.jpg') }}"  alt="foto"  class="photo"> @break
                        @case('Tulpes') <img src="{{  url('/images/tulpes.jpg') }}" alt="foto"  class="photo"> @break
                    @endswitch
                   
                </div> 
                   
            </div>
         <div class="col-sm-8">
             
             <div class="card">
                 <div class="list-group-item list-group-item-primary"><h4>Order placing</h4></div>
                 <div class="list-group-item"class="dates" >
                {!! Form::open(array('action'=>'OrderController@store')) !!} 
                    <div class="form-group">
                        {{Form::label('name','Name')}}
                        {{Form::text('name','',['class'=>'form-control','placeholder'=>'Name'])}}
                        @if ($errors->has('name'))
                        <span >
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif 
                    </div>
                    <div class="form-group">
                        {{Form::label('surname','Surname')}}
                        {{Form::text('surname','',['class'=>'form-control','placeholder'=>'Surname'])}}
                        @if ($errors->has('surname'))
                        <span >
                            <strong>{{ $errors->first('surname') }}</strong>
                        </span>
                        @endif 
                    </div>
                     <div class="form-group">
                        {{Form::label('perskods','Person code')}}
                        {{Form::text('perskods','',['class'=>'form-control','placeholder'=>'Person code'])}}
                        @if ($errors->has('perskods'))
                        <span >
                            <strong>{{ $errors->first('perskods') }}</strong>
                        </span>
                        @endif 
                    </div>
                    <h4> Your address </h4>
                
                    <div class="form-group">
                        
                        {{Form::label('city','City')}}
                        {{Form::text('city','',['class'=>'form-control','placeholder'=>'City'])}}
                        @if ($errors->has('city'))
                        <span>
                            <strong>{{ $errors->first('city') }}</strong>
                        </span>
                        @endif 
                    </div>
                    <div class="form-group">
                        {{Form::label('street','Street')}}
                        {{Form::text('street','',['class'=>'form-control','placeholder'=>'Street'])}}
                        @if ($errors->has('street'))
                        <span>
                            <strong>{{ $errors->first('street') }}</strong>
                        </span>
                        @endif 
                    </div>
                    
                    <div class="form-group" class="change_me">
                        {{Form::label('apartment','Apartment')}}
                        {{Form::number('apartment','',['placeholder'=>'Apartment', 'class'=>'form-control'])}}
                        @if ($errors->has('apartment'))
                        <span>
                            <strong>{{ $errors->first('apartment') }}</strong>
                        </span>
                        @endif 
                    </div>
                    <div class="form-group" class="change_me">
                        {{Form::label('count','Count of flowers')}}
                        {{Form::number('count','',['class'=>'form-control','id'=>'change_me','placeholder'=>'Count of flowers'])}}
                        @if ($errors->has('apartment'))
                        <span>
                            <strong>{{ $errors->first('count') }}</strong>
                        </span>
                        @endif 
                    </div>
                    <div class="form-group">
                         
                        {{Form::label('phone','Telephone number')}}
                         (+371) {{Form::text('phone','',['class'=>'form-control','placeholder'=>'Telephone number'])}}
                         @if ($errors->has('phone'))
                        <span>
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                        @endif 
                        <br>
                    </div>
                    <input type="hidden" name="kods" value="{{$kods}}" />
                    <input type="hidden" name="ziedaid" value="{{$flower->id}}" />
                    <input type="hidden" name="veids" value="{{$flower->ZiedaPuskaVeids}}" />
                    <input type="hidden" name="esamiba" value="{{$esamiba}}" />
                    {{Form::submit('Submit',['class'=>'btn btn-primary','skaits' => $flower->ZieduSkaits, 'kods' => $kods, 'esamiba'=>$esamiba, 'ZiedaPuskaVeids' => $flower->ZiedaPuskaVeids])}}
                    {!!Form::close()!!}
                 </div>
             </div>
             </div>
          
    </div>   
</div>
@endsection
