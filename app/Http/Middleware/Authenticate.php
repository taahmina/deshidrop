<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    


 protected function redirectTo($request)
{
    if ($request->expectsJson()) {
        return null;
    }

    // যদি route 'customer/*' দিয়ে শুরু হয়
    if ($request->is('customer_panel/*')) {
        return route('customer_panel.login'); // Customer login page
    }

    // অন্যথায় default admin login
    return route('login');
}


    
}
