<div>@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
            <div class="col-sm">
                <div class="card">
                    {{$flower->ZiedaPuskaVeids}}
                </div> 
            </div>
         <div class="col-sm-8">
             
             <div class="card">
                 <div class="list-group-item list-group-item-primary"><h4>Order placing</h4></div>
                 <div class="list-group-item"class="dates" >
                {!! Form::open() !!} 
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
                    </div>
                    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                    {!!Form::close()!!}
                 </div>
             </div>
             </div>
          
    </div>   
</div>
@endsection
