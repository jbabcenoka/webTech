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
                    <div class="list-group-item list-group-item-primary"><h4> {{ __('messages.order_info') }}</h4></div>
                    
                        <h3> 
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
                        
                        </h3>
                  <div>   {{ __('messages.count_of_flowers') }} : {{$flower->ZieduSkaits}} </div>
                    <div id="total-price">{{ __('messages.Total') }} : {{$cena}} €</div>
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
                 <div class="list-group-item list-group-item-primary"><h4>{{ __('messages.Order_placing') }}</h4></div>
                 <div class="list-group-item"class="dates" >
                {!! Form::open(array('action'=>'OrderController@store')) !!} 
                    <div class="form-group">
                        {{Form::label('name',__('messages.Name'))}}
                        {{Form::text('name','',['class'=>'form-control','placeholder'=>'Name'])}}
                        @if ($errors->has('name'))
                        <span >
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif 
                    </div>
                    <div class="form-group">
                        {{Form::label('surname',__('messages.Surname'))}}
                        {{Form::text('surname','',['class'=>'form-control','placeholder'=>__('messages.Surname')])}}
                        @if ($errors->has('surname'))
                        <span >
                            <strong>{{ $errors->first('surname') }}</strong>
                        </span>
                        @endif 
                    </div>
                     <div class="form-group">
                        {{Form::label('perskods',__('messages.Person_code'))}}
                        {{Form::text('perskods','',['class'=>'form-control','placeholder'=>__('messages.Person_code')])}}
                        @if ($errors->has('perskods'))
                        <span >
                            <strong>{{ $errors->first('perskods') }}</strong>
                        </span>
                        @endif 
                    </div>
                    <h4> {{ __('messages.Address') }} </h4>
                
                    <div class="form-group">
                        
                        {{Form::label('city',__('messages.City'))}}
                        {{Form::text('city','',['class'=>'form-control','placeholder'=>__('messages.City')])}}
                        @if ($errors->has('city'))
                        <span>
                            <strong>{{ $errors->first('city') }}</strong>
                        </span>
                        @endif 
                    </div>
                    <div class="form-group">
                        {{Form::label('street',__('messages.Street'))}}
                        {{Form::text('street','',['class'=>'form-control','placeholder'=>__('messages.Street')])}}
                        @if ($errors->has('street'))
                        <span>
                            <strong>{{ $errors->first('street') }}</strong>
                        </span>
                        @endif 
                    </div>
                    
                    <div class="form-group" class="change_me">
                        {{Form::label('apartment',__('messages.Apartment'))}}
                        {{Form::number('apartment','',['placeholder'=>__('messages.Apartment'), 'class'=>'form-control'])}}
                        @if ($errors->has('apartment'))
                        <span>
                            <strong>{{ $errors->first('apartment') }}</strong>
                        </span>
                        @endif 
                    </div>
                    <div class="form-group" class="change_me">
                        {{Form::label('count',__('messages.count_of_flowers'))}}
                        {{Form::number('count','',['class'=>'form-control','id'=>'change_me','placeholder'=>__('messages.count_of_flowers')])}}
                        @if ($errors->has('apartment'))
                        <span>
                            <strong>{{ $errors->first('count') }}</strong>
                        </span>
                        @endif 
                    </div>
                    <div class="form-group">
                         
                        {{Form::label('phone',__('messages.Phone'))}}
                         (+371) {{Form::text('phone','',['class'=>'form-control','placeholder'=>__('messages.Phone')])}}
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
                    {{Form::submit(__('messages.Submit'),['class'=>'btn btn-primary','skaits' => $flower->ZieduSkaits, 'kods' => $kods, 'esamiba'=>$esamiba, 'ZiedaPuskaVeids' => $flower->ZiedaPuskaVeids])}}
                    {!!Form::close()!!}
                 </div>
             </div>
             </div>
          
    </div>   
</div>
@endsection
