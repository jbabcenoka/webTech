@extends('layouts.app')
@section('content')
<div class="container">

    <br>
    <p hidden='true'>{{$i=0}}</p>
    <h2 class="list-group-item list-group-item-primary">{{ __('messages.Emploqees') }}</h2>
    
        <div class="row">
             
                    <div class="col-sm-7">
                            <div class="card">
                                <p hidden='true'> {{$i=1}} </p>
                               @foreach ($data as $darb)
                               
                                <div class="list-group-item">
                                    
                                
                                     <h4 class="list-group-item list-group-item-primary">{{ __('messages.Emploqee') }} №{{$i}} </h4>
                                         @foreach ($persona as $p)
                                            @if($darb->Persona_id == $p->id)
                                                <h5 class="card-text"> {{ __('messages.Name') }}: {{$p->Vards}} </h5>
                                                <h5 class="card-text"> {{ __('messages.Surname') }}: {{$p->Uzvards}} </h5>
                                                <h5 class="card-text"> {{ __('messages.Phone') }}: {{$p->Telefons}} </h5>
                                                <h5 class="card-text"> {{ __('messages.Person_code') }}: {{$p->PersKods}} </h5>
                                               @foreach ($adrese as $a) 
                                                    @if($p->adrese_id == $a->id)
                                                        <h5 class="card-text">{{ __('messages.Address') }}: {{$a->Pilseta}}   {{$a->Iela}}  {{$a->MajasN}}</h5>
                                                    @endif
                                                @endforeach
                                              
                                            @endif
                                         @endforeach
                                        @foreach ($amats as $am) 
                                                    @if($darb->Amats_id == $am->id)
                                                        @switch($am->AmataNosaukums) 
                                                            @case('Administrators') <h5 class="card-text" style="color:#00cc00; font-weight: bold "> {{ __('messages.Job') }} :  {{ __('messages.Administrator') }} </h5>@break
                                                            @case('Lietvedis') <h5 class="card-text" style="color:#00cc00; font-weight: bold "> {{ __('messages.Job') }} :  {{ __('messages.Accountant') }} </h5> @break
                                                            @case('Pārdevējs')<h5 class="card-text" style="color:#00cc00; font-weight: bold "> {{ __('messages.Job') }} :  {{ __('messages.Seller') }} </h5> @break
                                                            @case('Krāvējs') <h5 class="card-text" style="color:#00cc00; font-weight: bold "> {{ __('messages.Job') }} :  {{ __('messages.Loader') }}  </h5> @break
                                                            @case('Palīgstrādnieks') <h5 class="card-text" style="color:#00cc00; font-weight: bold "> {{ __('messages.Job') }} : {{ __('messages.Auxiliary_worker') }} </h5> @break
                                                            @case('Šoferis') <h5 class="card-text" style="color:#00cc00; font-weight: bold "> {{ __('messages.Job') }} :  {{ __('messages.Driver') }} </h5> @break
                                                            @case('Tīklu administrators') <h5 class="card-text" style="color:#00cc00; font-weight: bold "> {{ __('messages.Job') }} :  {{ __('messages.Network_administrator') }}  </h5>@break
                                                            @case('Apsargs') <h5 class="card-text" style="color:#00cc00; font-weight: bold "> {{ __('messages.Job') }} :  {{ __('messages.Security_guard') }} </h5> @break
                                                            @case('Analitiķis') <h5 class="card-text" style="color:#00cc00; font-weight: bold "> {{ __('messages.Job') }} : {{ __('messages.Analyst') }}  </h5> @break
                                                            @case('Dizaineris') <h5 class="card-text" style="color:#00cc00; font-weight: bold "> {{ __('messages.Job') }} : {{ __('messages.Designer') }}  </h5> @break
                                                       @endswitch
                                                    @endif
                                                @endforeach
                                        <h5 class="card-text">{{ __('messages.Salary') }}: {{$darb->DarbaAlga}} EUR</h5>
                                        <h5 class="card-text">{{ __('messages.Vacation') }}: {{ __('messages.from') }} {{$darb->AtvalinajumaSakums}} {{ __('messages.to') }} {{$darb->AtvalinajumaBeigas}} </h5>
                                       @if ($i != 1)
                                        <a type="button" id='delete_employee' style="background-color: #0099cc; color: white; border: none; padding: 16px; text-decoration: none; float:right;cursor: pointer;"  href="{{ action('VeikalsController@destroy', $darb->id)}}">{{ __('messages.delete_employee') }}</a>
                                        @endif
                                </div>   
                                     <p hidden='true'> {{$i++}} </p>
                                 @endforeach

                            </div>
                         </div> 
                        <div class="col-sm">
                                   <div class="card">
                                         <h2 class="list-group-item list-group-item-primary">{{ __('messages.Create_new_employee') }}</h2>
                                          <div class="card-body">
                                             <div class="list-group-item"  class="dates" >
                                            {!! Form::open(array('action'=>'VeikalsController@store')) !!} 
                                             <h4> {{ __('messages.Employee_pers_info') }}</h4>
                                                <div class="form-group">
                                                    {{Form::label('name', __('messages.Name') )}}
                                                    {{Form::text('name','',['class'=>'form-control','placeholder'=>__('messages.Name')])}}
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

                                                    {{Form::label('phone',__('messages.Phone'))}}
                                                     (+371) {{Form::text('phone','',['class'=>'form-control','placeholder'=>__('messages.Phone')])}}
                                                     @if ($errors->has('phone'))
                                                    <span>
                                                        <strong>{{ $errors->first('phone') }}</strong>
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
                                                
                                                <h4> {{ __('messages.emploqee_address') }}</h4>
                                                
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
                                               
                                                <h4> {{ __('messages.emploqee_info') }}</h4><br>
                                                <div class="form-group" class="change_me">
                                                    {{Form::label('amats',__('messages.Job'))}}
                                                    {{Form::select('amats',
                                                                 array('1' => __('messages.Administrator'), '2'=> __('messages.Accountant'),'3'=> __('messages.Seller'), '4'=> __('messages.Loader'),
                                                                        '5'=>__('messages.Auxiliary_worker'), '6'=>__('messages.Driver'), '7'=>__('messages.Network_administrator'),
                                                                        '8'=>__('messages.Security_guard'), '9'=>__('messages.Analyst'), '10'=>__('messages.Designer')),
                                                                 ['class'=>'form-control'])}}
                                                    @if ($errors->has('amats'))
                                                    <span>
                                                        <strong>{{ $errors->first('amats') }}</strong>
                                                    </span>
                                                    @endif 
                                                </div>
                                                <div class="form-group" class="change_me">
                                                    {{Form::label('alga',__('messages.Salary'))}}
                                                    {{Form::number('alga','',['placeholder'=>__('messages.Salary'), 'class'=>'form-control', 'step' => '0.01'])}}
                                                    @if ($errors->has('alga'))
                                                    <span>
                                                        <strong>{{ $errors->first('alga') }}</strong>
                                                    </span>
                                                    @endif 
                                                </div>
                                                <div class="form-group" class="change_me">
                                                    {{Form::label('atval_from',__('messages.Vacation_from'))}}
                                                    {{Form::date('atval_from','',['placeholder'=>__('messages.Vacation_from'), 'class'=>'form-control'])}}
                                                    @if ($errors->has('atval_from'))
                                                    <span>
                                                        <strong>{{ $errors->first('atval_from') }}</strong>
                                                    </span>
                                                    @endif 
                                                </div>
                                                <div class="form-group" class="change_me">
                                                    {{Form::label('atval_to',__('messages.Vacation_to'))}}
                                                    {{Form::date('atval_to','',['placeholder'=>__('messages.Vacation_to'), 'class'=>'form-control'])}}
                                                    @if ($errors->has('atval_to'))
                                                    <span>
                                                        <strong>{{ $errors->first('atval_to') }}</strong>
                                                    </span>
                                                    @endif 
                                                </div>
                                                {{Form::submit(__('messages.Submit'),['class'=>'btn btn-primary'])}}
                                                {!!Form::close()!!}
                                              </div> 
                                           </div>
                                   </div>
                        </div>             
                 </div>
</div>
@endsection
