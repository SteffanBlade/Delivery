@extends('layouts.app2')
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
    {{-- it is a gift? --}}
    <div class="form-group">
        {{ Form::Label('Gift','It is a gift? (Optional)') }}
        {{ Form::checkbox('Gift','1',['class'=>'form-control']) }}
    </div>
    {{-- from who is the gift? --}}
    <div class="form-group">
        {{ Form::Label('GiftFrom','GiftFrom (Optional)') }}
        {{ Form::text('GiftFrom','',['class'=>'form-control']) }}
    </div>
    {{-- aditional comments  --}}
<div class="form-group">
    {{ Form::Label('comment','Aditional comment') }}
    {{ Form::text('comment','',['class'=>'form-control']) }}
</div>
    {{ Form::submit('Submit',['class'=>'btn btn-success']) }}
    </div>
    

{!! Form::close() !!}
@endsection