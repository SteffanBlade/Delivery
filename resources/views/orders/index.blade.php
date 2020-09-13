@extends('layouts.app2')
@section('content')
    <h2>All orders</h2>
    @if (count($orders) > 0)
        @foreach ($orders as $order)
            <div class="jumbotron">
                <div class="row">
                    <div class="col-6">
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
                    </div>
                    <div class="col-6">
                        <ul>
                            {{-- delete this if(only the if not the content of if) when it is
                            readey for production --}}
                            @if ($order->created_at != null)
                                <li>Created day : {{ $order->created_at->format('d M') }}</li>
                                <li>Created hour : {{ $order->created_at->format('H:m:s') }}</li>
                            @endif
                            <li>Confirmed hour : {{ $order->confirmedAt }}</li>
                            <li>Picked up hour : {{ $order->pickedUpAt }}</li>
                            <li>Delivered hour : {{ $order->deliveredAt }}</li>
                            <li>Assigned To : {{ $order->assigned }}</li>
                            @if ($order->Gift == 1)
                                <li>It is a gift from {{ $order->GiftFrom }}</li>
                            @endif
                        </ul>
                    </div>
                </div>
                {{-- order details --}}


                <a name="AcceptOrder" id="AcceptOrder" class="btn btn-success" href="/orders/{{ $order->id }}/delivered"
                    role="button">Delivered</a>
                @if ($user->type == 'administrator')

                    <!-- {{-- select delivery man  --}} -->
                    <form>
                        <div class="form-group mt-2">
                            <label for="selectDeliveryMan">Pass to :</label>
                           
                                @foreach ($deliveryMen as $man)
                        <a class="btn btn-secondary" href="/orders/{{ $order->id }}/assigned/{{ $man->id }}"> Number {{ $man->id }} - {{ $man->name }}</a>
                                @endforeach
                           

                        </div>
                       
                    </form>


                @endif


            </div>
        @endforeach
    @else
        <h1>No orders found!</h1>
    @endif


@endsection

{{-- ajax script for selected option
@section('page-js-script')
<script>
    $('#selectDeliveryMan').click(function() {
        var id = $(this).find(':selected')[0].id;
        console.log('Salutare');
        // $.ajax({
        //     type: 'POST',
        //     url: '../include/continent.php',
        //     data: {
        //         'id': id
        //     },
        //     success: function (data) {
        //         // the next thing you want to do 
        //         var $country = $('#country');
    });

</script>
@stop --}}



