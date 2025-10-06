<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use App\Models\VendorType;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Vendor::get();
        return view('vendor.index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $v_type=VendorType::orderBy('name')->get();
        return view('vendor.create',compact('v_type'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['password']=bcrypt($request->password);
        Vendor::create($input);
        return redirect()->route('vendor.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vendor $vendor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vendor $vendor)
    {
        $v_type=VendorType::orderBy('name')->get();
        return view('vendor.edit',compact('vendor','v_type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vendor $vendor)
    {
        $input = $request->all();
        if($request->password && $request->password != "")
            $input['password']=bcrypt($request->password);

        $vendor->update($input);
        return redirect()->route('vendor.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vendor $vendor)
    {
          $vendor->delete();
        return redirect()->route('vendor.index');
    }
}
