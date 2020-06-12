@extends('layouts.app')
@section('content')

@isset($car)
<div id='a'></div>
<div class="container">
    <div class="row">
            <div class="col-sm">
                <div class="card">
                    <h2 class="list-group-item list-group-item-primary"> Order information</h2>
                    <h3 class="list-group-item list-group-item-primary">{{ $car->specification->make }} {{$car->specification->model}}</h3>
                    <div class="card-body">
                        <h5 class="card-text">Vehicle class: {{ $car->specification->vehicleClass->name}}</h5>
                        <h5 class="card-text">Year: {{ $car->specification->year }}</h5>
                        <h5 class="card-text">Transmission: @if ($car->specification->automatic) automatic @else manual @endif</h5>
                        <h5 class="card-text">Color: {{ $car->color }}</h5>
                        <h5 class="card-text">Mileage: {{ $car->mileage }}</h5>
                        <h5 class="card-text">Price: {{ $car->price }} EUR</h5>
                        <h5 class="card-text">{{ $car->condition }}</h5>
                    </div>
                    <h3 class="list-group-item list-group-item-primary">Extras</h3>
                    <div class="card-body">
                        @foreach ( $extras as $extra )
                         <h5 class="card-text">
                             @if (in_array($extra->id, $selected)) {{$extra->name}} ({{ $extra->price_per_day }} EUR per day) @endif
                         </h5>
                        @endforeach 
                      
                    </div>
                    <h3 class="list-group-item list-group-item-primary">Total cost per day</h3> 
                    <div class="card-body" id="per_day">
                       <h5 class="card-text">
                         {{$total}} EUR per day
                       </h5>
                    </div>
                </div> 
            </div>
         <div class="col-sm-8">
             
             <div class="card">
                 <div class="list-group-item list-group-item-primary"><h4>Order placing</h4></div>
                 <div class="list-group-item"class="dates" >
                {!! Form::open(array('action'=>'OrderController@store')) !!} 
                    <div class='form-group'>
                        {{Form::label('date_from','Rental date from')}}
                        {{Form::date('date_from',\Carbon\Carbon::now())}}
                        @if ($errors->has('date_from'))
                        <span >
                            <strong>{{ $errors->first('date_from') }}</strong>
                        </span>
                        @endif 
                    </div> 
                    <div class="form-group">
                        {{Form::label('date_to','Rental date to')}}
                        {{Form::date('date_to', \Carbon\Carbon::now())}}
                        @if ($errors->has('date_to'))
                        <span >
                            <strong>{{ $errors->first('date_to') }}</strong>
                        </span>
                        @endif 
                    </div>
                    <br>
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
                        {{Form::label('address','Address')}}
                        {{Form::text('address','',['class'=>'form-control','placeholder'=>'Address'])}}
                        @if ($errors->has('address'))
                        <span>
                            <strong>{{ $errors->first('address') }}</strong>
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
                        {{Form::label('Total:  ')}} {{ $total }} EUR
                    </div>
                    {{Form::submit('Submit',['class'=>'btn btn-primary'], ["total" => $total])}}
                    {!!Form::close()!!}
                 </div>
             </div>
             </div>
          
    </div>   
</div>
@endisset
@empty($car)
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <h4 class="list-group-item list-group-item-primary">There is not something in the cart!</h4>
            </div>
        </div>
    </div>
</div>
@endempty
@endsection
