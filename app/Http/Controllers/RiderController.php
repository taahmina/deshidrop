<?php

namespace App\Http\Controllers;

use App\Models\Rider;
use Illuminate\Http\Request;

class RiderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Rider::get();
        return view('rider.index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
          return view('rider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $input = $request->all();
        $input['password']=bcrypt($request->password);
        Rider::create($input);
        return redirect()->route('rider.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rider $rider)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rider $rider)
    {
          return view('rider.edit',compact('rider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rider $rider)
    {
       

        $input = $request->all();
        if($request->password && $request->password != "")
            $input['password']=bcrypt($request->password);

        $rider->update($input);
        return redirect()->route('rider.index');



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rider $rider)
    {
         $rider->delete();
        return redirect()->route('rider.index');
    }
}
