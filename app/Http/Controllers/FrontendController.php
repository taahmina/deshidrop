<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function home() {
        $feature_item=\App\Models\Item::where('is_featured',1)->where('is_active',1)->get();
        return view('welcome',compact('feature_item'));
    }
}
