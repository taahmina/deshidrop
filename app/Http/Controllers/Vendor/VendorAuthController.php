<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Devfaysal\BangladeshGeocode\Models\Division;
use Devfaysal\BangladeshGeocode\Models\District;
use Illuminate\Http\Request;
use App\Models\Vendor;

class VendorAuthController extends Controller
{
    public function login(){
        return view('vendor_panel.login');
    }

    public function checkLogin(Request $request){

        $credentials = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        if(auth()->guard('vendor')->attempt($credentials)){
            return redirect()->route('vendor_panel.dashboard');
        }

        return back()->withErrors(['username' => 'Invalid credentials'])->withInput();
    }

    public function dashboard(){
        return view('vendor_panel.dashboard');
    }

    public function show($id) {
        $vendors =Vendor::findOrFail($id);
        return view('vendor.show', compact('vendors'));
    }

    public function logout(){
        auth()->guard('vendor')->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('vendor_panel.login');
    }

}
