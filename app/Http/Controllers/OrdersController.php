<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\User;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user_id = auth()->user()->id;
        // $user = User::find($user_id);
        // $orders = $user->orders()->get(); 
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $orders = Order::all();
        return view('orders.index')->with('orders',$orders)->with('user',$user);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function MyOrders()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $orders = $user->orders()->get(); 
        return view('orders.myorders')->with('orders',$orders)
                                    ->with('user',$user);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ConfirmedAt($id)
    {
        $order = Order::find($id);
        $order->confirmedAt = now();
        $order->save();
        return back();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function PickedUpAt($id)
    {
        $order = Order::find($id);
        $order->pickedUpAt = now();
        $order->save();
         return back();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function DeliveredAt($id)
    {
        $order = Order::find($id);
        $order->deliveredAt = now();
        $order->save();
        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'PickupLocation'=>'required'
        ]);

        $order = new Order;
        $order->PickupLocation = $request->input('PickupLocation');
        // $order->PickUpTime = now();
        $order->DeliveryAdress = $request->input('DeliveryAdress');
        $order->DeliveryPostCode = $request->input('DeliveryPostCode');
        $order->ClientName = $request->input('ClientName');
        $order->ClientPhoneNumber = $request->input('ClientPhoneNumber');
        $order->user_id = auth()->user()->id;
        
        if($request->input('Gift') != null){
            $order->gift = true;
            $order->giftFrom = $request->input('GiftFrom');
        }
    
        $order->save();

         return redirect('/orders');

        // to be continued

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
