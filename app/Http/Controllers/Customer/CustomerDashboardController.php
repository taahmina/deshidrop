<?php


namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Order;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:customer');
    }

    public function customerdash()
    {
        return view('customer_panel.dashboard');
    }
       
}