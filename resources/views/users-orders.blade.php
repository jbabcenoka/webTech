@extends('layouts.app')
@section('content')
    <div class="container">

        <br>
        <p hidden='true'>{{$i=0}}</p>
        <h2 class="list-group-item list-group-item-primary">{{ __('messages.users_orders') }}</h2>
        <div class="row">

            <div class="col-sm-7">

                <div class="card">
                    @foreach ($data as $order)
                        @if($order->Fulfilled == false)
                            <h4 class="list-group-item list-group-item-primary">{{ __('messages.order') }} №{{ $order->id}}</h4>
                            <h5 class="card-text">{{ __('messages.flower') }}:
                                @switch($order->ZiedaPuskaVeids)
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
                            </h5>
                            <h5 class="card-text">{{ __('messages.count') }}: {{$order->Skaits}}</h5>
                            @foreach ($persona as $p)
                                @if($order->persona_id == $p->id)
                                    <h5 class="card-text"> {{ __('messages.Name') }}: {{$p->Vards}} </h5>
                                    <h5 class="card-text"> {{ __('messages.Surname') }}: {{$p->Uzvards}} </h5>
                                    <h5 class="card-text"> {{ __('messages.Phone') }}: {{$p->Telefons}} </h5>
                                    @foreach ($adrese as $a)
                                        @if($p->adrese_id == $a->id)
                                            <h5 class="card-text"> {{ __('messages.Address') }}: {{$a->Pilseta}}   {{$a->Iela}}  {{$a->MajasN}}</h5>
                                        @endif
                                    @endforeach

                                @endif
                            @endforeach
                            @foreach ($cena as $c)
                                @if($order->ZiedaPuskaVeids == $c->ZiedaPuskaVeids)
                                    <h5 class="card-text"> {{ __('messages.price') }}: {{$c->CenaParVienu  * $order->Skaits}} EUR</h5>
                                @endif
                            @endforeach
                            <form method="POST" action="{{"/users-orders-update"}}">
                                @csrf
                                {{ method_field('PATCH') }}
                                <input type="submit" style="margin-left: 85%; width:15% " class="btn btn-success" href="/users-orders/"  value='{{__('messages.fulfilled')}}'>
                                <input type="hidden" name="id" value="{{ $order->id }}">
                                <input type="hidden" name="fulfilled" value=1>

                            </form>
                        @endif
                    @endforeach

                </div>
            </div>
            <div class="col-sm-5">
                <h3 class="list-group-item list-group-item-primary">{{ __('messages.Fulfilled_orders') }}</h3>


                @foreach ($data as $order)

                    @if($order->Fulfilled == 1)
                        <h4 class="list-group-item list-group-item-primary"> {{ __('messages.order') }} №{{ $order->id}}</h4>
                        <h5 class="card-text">{{ __('messages.flower') }}:
                            @switch($order->ZiedaPuskaVeids)
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
                        </h5>
                        <h5 class="card-text">{{ __('messages.count') }}: {{$order->Skaits}}</h5>
                        @foreach ($persona as $p)
                            @if($order->persona_id == $p->id)
                                <h5 class="card-text"> {{ __('messages.Name') }}: {{$p->Vards}} </h5>
                                <h5 class="card-text">{{ __('messages.Surname') }}: {{$p->Uzvards}} </h5>
                                <h5 class="card-text">{{ __('messages.Phone') }}: {{$p->Telefons}} </h5>
                                @foreach ($adrese as $a)
                                    @if($p->adrese_id == $a->id)
                                        <h5 class="card-text"> {{ __('messages.Address') }}: {{$a->Pilseta}}   {{$a->Iela}}  {{$a->MajasN}}</h5>
                                    @endif
                                @endforeach

                            @endif
                        @endforeach
                        @foreach ($cena as $c)
                            @if($order->ZiedaPuskaVeids == $c->ZiedaPuskaVeids)
                                <h5 class="card-text"> {{ __('messages.price') }}: {{$c->CenaParVienu  * $order->Skaits}} EUR </h5>
                            @endif
                        @endforeach

                        <form method="POST" action="{{"/users-orders-update"}}">
                            @csrf
                            {{ method_field('PATCH') }}
                            <input type="submit" style="margin-left: 70%; width:30% " class="btn btn-danger" value='{{__('messages.remove_fulfilled')}}'>
                            <input type="hidden" name="id" value="{{ $order->id }}">
                            <input type="hidden" name="fulfilled" value=0>
                        </form>

                    @endif
                @endforeach

            </div>
        </div>
    </div>

    </div>
    </div>
    </div>
@endsection
