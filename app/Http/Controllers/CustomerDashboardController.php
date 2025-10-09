<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:customer');
    }

    public function index()
    {
        $customer = Auth::guard('customer')->user();
        $recentOrders = $customer->orders()->latest()->take(5)->get();
        
        $stats = [
            'total_orders' => $customer->orders()->count(),
            'completed_orders' => $customer->orders()->where('status', 'completed')->count(),
            'pending_orders' => $customer->orders()->where('status', 'pending')->count(),
            'total_spent' => $customer->orders()->where('status', 'completed')->sum('total_amount')
        ];

        return view('customer_panel.dashboard.index', compact('customer', 'recentOrders', 'stats'));
    }
}