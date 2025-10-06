<?php

namespace App\Http\Controllers\Rider;

use App\Http\Controllers\Controller;
use Devfaysal\BangladeshGeocode\Models\Division;
use Devfaysal\BangladeshGeocode\Models\District;
use Illuminate\Http\Request;
use App\Models\Rider;

class RiderAuthController extends Controller
{
    public function login(){
        return view('rider_panel.login');
    }

    public function checkLogin(Request $request){

        $credentials = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        if(auth()->guard('rider')->attempt($credentials)){
            return redirect()->route('rider_panel.dashboard');
        }

        return back()->withErrors(['username' => 'Invalid credentials'])->withInput();
    }

    public function dashboard(){
        return view('rider_panel.dashboard');
    }

    public function show($id) {
        $riders =Rider::findOrFail($id);
        return view('rider.show', compact('riders'));
    }

    public function logout(){
        auth()->guard('rider')->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('rider_panel.login');
    }

}
