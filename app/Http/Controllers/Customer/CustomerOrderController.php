<?php

namespace App\Http\Controllers\Customer;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Customer;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CustomerOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customerId = auth()->guard('customer')->id();
        $order=Order::where('user_id',$customerId)->get();
        return view('customer_panel.order.index',compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customer=Customer::get();
        return view('customer_panel.order.create',compact('customer'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         Order::create($request->all());
        return redirect()->route('customer_panel.order.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
           return view('customer_panel.order.show',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
         $customer=Customer::get();
         return view('customer_panel.order.edit',compact('order','customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
            $order->update($request->all());
       return redirect()->route('customer_panel.order.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
            $order->delete();
       return redirect()->route('customer_panel.order.index');
    }
}
