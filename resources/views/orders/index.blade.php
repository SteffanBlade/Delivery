@extends('layouts.app')
@section('content')
    <h2>All orders</h2>
    @if ( count($orders) > 0 )
        @foreach ($orders as $order)
            <div class="jumbotron">
                {{-- order details --}}
                <h3>
                    Pickup Location : {{ $order->PickupLocation }}
                </h3>
                <h3>
                    Delivery Location : {{ $order->DeliveryAdress }}
                </h3>
                <h3>
                    Delivery PostCode : {{ $order->DeliveryPostCode }}
                </h3>
                <h3>
                    Client Name : {{ $order->ClientName }}
                </h3>
                <h3>
                    Client Phone number : {{ $order->ClientPhoneNumber }}
                </h3>
                <a name="AcceptOrder" id="AcceptOrder" class="btn btn-primary" href="#" role="button">Accept Order</a>
                <a name="PickOrder" id="PickOrder" class="btn btn-secondary" href="#" role="button">Pick Order</a>
                <a name="AcceptOrder" id="AcceptOrder" class="btn btn-success" href="#" role="button">Delivered</a>
            </div>
        @endforeach
    @else
        <h1>No orders found!</h1>
    @endif
@endsection