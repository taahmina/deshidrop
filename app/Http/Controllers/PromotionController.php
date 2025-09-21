<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $data=Promotion::get();
        return view('promotion.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $typ = ['discount', 'weekend_offer', 'promo_code', 'referral','free_delivary','cashback'];
        $des=['percentage','fixed','free_shipping','referral_bonus'];

         return view('promotion.create', compact('typ','des'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Promotion::create($request->all());
        return redirect()->route('promotion.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Promotion $promotion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Promotion $promotion)
    {
        $typ = ['discount', 'weekend_offer', 'promo_code', 'referral','free_delivary','cashback'];
        $des=['percentage','fixed','free_shipping','referral_bonus'];

        
          return view('promotion.edit',compact('promotion','typ','des'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Promotion $promotion)
    {
          $promotion->update($request->all());
        return redirect()->route('promotion.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promotion $promotion)
    {
         $promotion->delete();
        return redirect()->route('promotion.index');
    }
}
