<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Customer;
use App\Models\Rider;
use App\Models\Coupon;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $data=Order::get();
        return view('order.index',compact('data'));
    }


    


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customer=Customer::get();
        return view('order.create',compact('customer'));
    }
   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         Order::create($request->all());
        return redirect()->route('order.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
           return view('order.show',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
         $customer=Customer::get();
           $rider =Rider::get();
         return view('order.edit',compact('order','customer','rider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
            $order->update($request->all());
       return redirect()->route('order.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
            $order->delete();
       return redirect()->route('order.index');
    }
}
