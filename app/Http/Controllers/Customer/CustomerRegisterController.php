<?php
namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CustomerRegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/customer/dashboard';

    public function __construct()
    {
        $this->middleware('guest:customer');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:customers',
            'phone' => 'required|string|max:15|unique:customers',
            'password' => 'required|string|min:8|confirmed',
            'address' => 'required|string|max:500',
        ]);
    }

    protected function create(array $data)
    {
        return Customer::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function showRegistrationForm()
    {
        return view('customer_panel.auth.register');
    }

    protected function guard()
    {
        return auth()->guard('customer');
    }
}
