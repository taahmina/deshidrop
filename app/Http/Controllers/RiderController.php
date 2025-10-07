<?php
namespace App\Http\Controllers;


use Devfaysal\BangladeshGeocode\Models\Division;
use Devfaysal\BangladeshGeocode\Models\District;
use App\Models\Rider;
use Illuminate\Http\Request;

class RiderController extends Controller

{
         
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Rider::all();
        return view('rider.index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $divisions = Division::all();
        $districts = District::all();
        return view('rider.create', compact('divisions','districts'));


        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


         $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:riders,email',
            'phone' => 'required',
            'password' => 'required|min:6',
            'address' => 'required',
            'division_id' => 'required|exists:divisions,id',
            'district_id' => 'required|exists:districts,id',
            'vehicle_number' => 'required',
            'license_number' => 'required',
            'status' => 'required',
        ]);

        $input = $request->all();
        $input['password']=bcrypt($request->password);
        Rider::create($input);
        return redirect()->route('rider.index')->with('success', 'Rider created successfully.');;
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
        $divisions = Division::all();
        $districts = District::all();
        return view('rider.edit', compact('rider', 'divisions', 'districts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rider $rider)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:riders,email,' . $rider->id,
              'phone' => 'required',
               'address' => 'required',
            'division_id' => 'required|exists:divisions,id',
            'district_id' => 'required|exists:districts,id',
              'vehicle_number' => 'required',
                'license_number' => 'required',
                'status' => 'required',
        ]);

        $input = $request->all();
             if ($request->filled('password')) {
            $input['password'] = bcrypt($request->password);
        } else {
            unset($input['password']); // Don't update password if empty
        }

        $rider->update($input);

        return redirect()->route('rider.index')->with('success', 'Rider updated successfully.');
      

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rider $rider)
    {
         $rider->delete();
        return redirect()->route('rider.index')->with('success', 'Rider deleted successfully.');
    }
}
