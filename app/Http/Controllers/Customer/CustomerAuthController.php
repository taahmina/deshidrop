<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Devfaysal\BangladeshGeocode\Models\Division;
use Devfaysal\BangladeshGeocode\Models\District;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerAuthController extends Controller
{
    public function login(){
        return view('customer_panel.login');
    }

    public function checkLogin(Request $request){

        $credentials = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        if(auth()->guard('customer')->attempt($credentials)){
            return redirect()->route('customer_panel.dashboard');
        }

        return back()->withErrors(['username' => 'Invalid credentials'])->withInput();
    }

    public function dashboard(){
        return view('customer_panel.dashboard');
    }

    public function show($id) {
        $customers =Customer::findOrFail($id);
        return view('customer.show', compact('customers'));
    }

    public function logout(){
        auth()->guard('customer')->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('customer_panel.login');
    }

}
