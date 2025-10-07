<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $data=Customer::get();
        return view('customer.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
           return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $input = $request->all();
        $input['password']=bcrypt($request->password);
        Customer::create($input);
        return redirect()->route('customer.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
         $input = $request->all();
        if($request->password && $request->password != "")
            $input['password']=bcrypt($request->password);

        $customer->update($input);
        return redirect()->route('customer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
         $customer->delete();
        return redirect()->route('customer.index');
    }
}
