@extends('layouts.app')
@section('content')
<div class="container">

    <br>
    <p hidden='true'>{{$i=0}}</p>
    <h2 class="list-group-item list-group-item-primary">Emploqees</h2>
    
        <div class="row">
             
                    <div class="col-sm-7">
                            <div class="card">
                                <p hidden='true'> {{$i=1}} </p>
                               @foreach ($data as $darb)
                               
                                <div class="list-group-item">
                                    
                                
                                     <h4 class="list-group-item list-group-item-primary">Emploqee №{{$i}} </h4>
                                         @foreach ($persona as $p)
                                            @if($darb->Persona_id == $p->id)
                                                <h5 class="card-text"> Name: {{$p->Vards}} </h5>
                                                <h5 class="card-text"> Surname: {{$p->Uzvards}} </h5>
                                                <h5 class="card-text"> Phone: {{$p->Telefons}} </h5>
                                                <h5 class="card-text"> Person code: {{$p->PersKods}} </h5>
                                               @foreach ($adrese as $a) 
                                                    @if($p->adrese_id == $a->id)
                                                        <h5 class="card-text"> Address: {{$a->Pilseta}}   {{$a->Iela}}  {{$a->MajasN}}</h5>
                                                    @endif
                                                @endforeach
                                              
                                            @endif
                                         @endforeach
                                        @foreach ($amats as $am) 
                                                    @if($darb->Amats_id == $am->id)
                                                      <h5 class="card-text" style="color:#00cc00; font-weight: bold "> Amats: {{$am->AmataNosaukums}} </h5>
                                                    @endif
                                                @endforeach
                                        <h5 class="card-text">Darba alga: {{$darb->DarbaAlga}} EUR</h5>
                                        <h5 class="card-text">Atvalinajums: from {{$darb->AtvalinajumaSakums}} to {{$darb->AtvalinajumaBeigas}} </h5>
                                       @if ($i != 1)
                                        <a type="button" id='delete_employee' style="background-color: #0099cc; color: white; border: none; padding: 16px; text-decoration: none; float:right;cursor: pointer;"  href="{{ action('VeikalsController@destroy', $darb->id)}}"> Delete employee </a>
                                        @endif
                                </div>   
                                     <p hidden='true'> {{$i++}} </p>
                                 @endforeach

                            </div>
                         </div> 
                        <div class="col-sm">
                                   <div class="card">
                                         <h2 class="list-group-item list-group-item-primary">Create new employee</h2>
                                          <div class="card-body">
                                             <div class="list-group-item"  class="dates" >
                                            {!! Form::open(array('action'=>'VeikalsController@store')) !!} 
                                             <h4> Employee`s personal information</h4>
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

                                                    {{Form::label('phone','Phone')}}
                                                     (+371) {{Form::text('phone','',['class'=>'form-control','placeholder'=>'Phone'])}}
                                                     @if ($errors->has('phone'))
                                                    <span>
                                                        <strong>{{ $errors->first('phone') }}</strong>
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
                                                
                                                <h4> Employee`s address </h4>
                                                
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
                                               
                                                <h4> Employee`s job information </h4><br>
                                                <div class="form-group" class="change_me">
                                                    {{Form::label('amats','Amats')}}
                                                    {{Form::select('amats',
                                                                 array('1' => 'Administrators', '2'=> 'Lietvedis','3'=>'Pārdevējs', '4'=>'Pārdevējs',
                                                                        '5'=>'Palīgstrādnieks', '6'=>'Šoferis', '7'=>'Tīklu administrators',
                                                                        '8'=>'Apsargs', '9'=>'Analitiķis', '10'=>'Dizaineris'),
                                                                 ['class'=>'form-control'])}}
                                                    @if ($errors->has('amats'))
                                                    <span>
                                                        <strong>{{ $errors->first('amats') }}</strong>
                                                    </span>
                                                    @endif 
                                                </div>
                                                <div class="form-group" class="change_me">
                                                    {{Form::label('alga','Alga')}}
                                                    {{Form::number('alga','',['placeholder'=>'Alga', 'class'=>'form-control', 'step' => '0.01'])}}
                                                    @if ($errors->has('alga'))
                                                    <span>
                                                        <strong>{{ $errors->first('alga') }}</strong>
                                                    </span>
                                                    @endif 
                                                </div>
                                                <div class="form-group" class="change_me">
                                                    {{Form::label('atval_from','Atvalinajums from')}}
                                                    {{Form::date('atval_from','',['placeholder'=>'Atvalinajums from', 'class'=>'form-control'])}}
                                                    @if ($errors->has('atval_from'))
                                                    <span>
                                                        <strong>{{ $errors->first('atval_from') }}</strong>
                                                    </span>
                                                    @endif 
                                                </div>
                                                <div class="form-group" class="change_me">
                                                    {{Form::label('atval_to','Atvalinajums to')}}
                                                    {{Form::date('atval_to','',['placeholder'=>'Atvalinajums to', 'class'=>'form-control'])}}
                                                    @if ($errors->has('atval_to'))
                                                    <span>
                                                        <strong>{{ $errors->first('atval_to') }}</strong>
                                                    </span>
                                                    @endif 
                                                </div>
                                                {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                                                {!!Form::close()!!}
                                              </div> 
                                           </div>
                                   </div>
                        </div>             
                 </div>
</div>
@endsection
