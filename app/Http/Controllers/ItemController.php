<?php

namespace App\Http\Controllers;


use App\Models\Item;
use App\Models\Vendor;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $data=Item::get();
        return view('item.index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ven=Vendor::orderBy('name')->get();
        $cat=Category::orderBy('name')->get();
        $ta=Tag::orderBy('name')->get();
         
        return view('item.create',compact('ven','cat','ta'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item=Item::create($request->all());
        if($request->has('tag_id'))
            $item->tags()->attach($request->tag_id);
        return redirect()->route('item.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
         $ven=Vendor::orderBy('name')->get();
         $cat=Category::orderBy('name')->get();
        $ta=Tag::orderBy('name')->get();
        return view('item.edit',compact('item','ven','cat','ta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
          $item->update($request->all());
          if($request->has('tag_id'))
            $item->tags()->sync($request->tag_id);
        return redirect()->route('item.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
         $item->delete();
        return redirect()->route('item.index');
    }
}
