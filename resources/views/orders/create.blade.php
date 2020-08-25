@extends('layouts.app')
@section('content')
    <h1>
        Create new order
    </h1>

    {!! Form::open(['action'=>'OrdersController@store','method'=>'POST']) !!}
    {{-- pick up location form     --}}
    <div class="container">
        <div class="form-group">
            {{ Form::Label('PickupLocation','PickupLocation') }}
            {{ Form::text('PickupLocation','',['class'=>'form-control']) }}
    </div>
    {{-- delivery location form --}}
    <div class="form-group">
        {{ Form::Label('DeliveryAdress','DeliveryAdress') }}
        {{ Form::text('DeliveryAdress','',['class'=>'form-control']) }}
    </div>
    {{-- delivery post code --}}
    <div class="form-group">
        {{ Form::Label('DeliveryPostCode','DeliveryPostCode') }}
        {{ Form::text('DeliveryPostCode','',['class'=>'form-control']) }}
    </div>
    {{-- client name form --}}
    <div class="form-group">
        {{ Form::Label('ClientName','ClientName') }}
        {{ Form::text('ClientName','',['class'=>'form-control']) }}
    </div>
    {{-- client phone number --}}
    <div class="form-group">
        {{ Form::Label('ClientPhoneNumber','ClientPhoneNumber') }}
        {{ Form::text('ClientPhoneNumber','',['class'=>'form-control']) }}
    </div>
    {{ Form::submit('Submit',['class'=>'btn btn-success']) }}
    </div>
    
{{-- $table->integer('DeliveryPostCode');
            $table->string('ClientName');
            $table->string('ClientPhoneNumber'); --}}
{!! Form::close() !!}
@endsection