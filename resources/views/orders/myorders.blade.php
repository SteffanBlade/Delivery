@extends('layouts.app2')
@section('content')
    <h2>All orders</h2>


    {{-- details for shop users --}}
    @if ($user->type == 'shop' && count($orders) > 0)
        @foreach ($orders as $order)
            <div class="jumbotron">
                <div class="row">
                    <div class="col-6">
                        <ul>
                            <li>Pickup Location : {{ $order->PickupLocation }}</li>
                            <li>Delivery Location : {{ $order->DeliveryAdress }}</li>
                            <li>Delivery PostCode : {{ $order->DeliveryPostCode }}</li>
                            <li>Client Name : {{ $order->ClientName }}</li>
                            <li>Client Phone number : {{ $order->ClientPhoneNumber }}</li>
                            <li>Aditional comment : {{ $order->comment }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    @endif

    {{-- details for delivery users --}}
    @if ($user->type == 'delivery')
        @foreach ($myOrders as $order)
            <div class="jumbotron">
                <div class="row">
                    <div class="col-6">
                        <ul>
                            <li>Created day : {{ $order->created_at }}</li>
                            <li>Created hour : {{ $order->created_at }}</li>
                            <li>Confirmed hour : {{ $order->confirmedAt }}</li>
                            <li>Picked up hour : {{ $order->pickedUpAt }}</li>
                            <li>Delivered hour : {{ $order->deliveredAt }}</li>
                            @if ($order->Gift == 1)
                                <li>It is a gift from {{ $order->GiftFrom }}</li>
                            @endif
                            <li>
                                Aditional comment : {{ $order->comment }}
                            </li>
                        </ul>

                    </div>
                </div>
                {{-- check if the parameters are set; if they are, disable the button --}}
                @if ($order->confirmedAt == null)
                <a name="AcceptOrder" id="AcceptOrder" class="btn btn-primary" href="/orders/{{ $order->id }}/confirmed"
                    role="button">Accept Order</a>
                    @endif
                    
                @if ($order->pickedUpAt == null)
                <a name="PickOrder" id="PickOrder" class="btn btn-secondary" href="/orders/{{ $order->id }}/pickedup"
                    role="button">Pick Order</a>
                @endif
                
                @if ($order->deliveredAt == null)
                <a name="AcceptOrder" id="AcceptOrder" class="btn btn-success" href="/orders/{{ $order->id }}/delivered"
                    role="button">Delivered</a>
                @endif
            </div>
        @endforeach

    @endif

    {{-- details for administrator users --}}
    @if ($user->type == 'administrator')
        @foreach ($orders as $order)
            <div class="jumbotron">
                <div class="row">
                    <div class="col-6">
                        <ul>
                            <li>Created day : {{ $order->created_at }}</li>
                            <li>Created hour : {{ $order->created_at }}</li>
                            <li>Confirmed hour : {{ $order->confirmedAt }}</li>
                            <li>Picked up hour : {{ $order->pickedUpAt }}</li>
                            <li>Delivered hour : {{ $order->deliveredAt }}</li>
                            @if ($order->Gift == 1)
                                <li>It is a gift from {{ $order->GiftFrom }}</li>
                            @endif
                            <li>Aditional comment : {{ $order->comment }}</li>
                        </ul>
                    </div>
                </div>
                <a name="AcceptOrder" id="AcceptOrder" class="btn btn-success" href="/orders/{{ $order->id }}/delivered"
                    role="button">Delivered</a>
            </div>
        @endforeach
    @endif

@endsection
