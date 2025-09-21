<?php

namespace App\Http\Controllers;

use App\Models\ItemTag;
use App\Models\Item;
use App\Models\Tag;
use Illuminate\Http\Request;

class ItemTagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $data=Itemtag::get();
        return view('item_tag.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $ite=Item::orderBy('name')->get();
           $ta=Tag::orderBy('name')->get();
        return view('item_tag.create',compact('ite','ta'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ItemTag::create($request->all());
        return redirect()->route('item_tag.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(ItemTag $itemTag)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ItemTag $itemTag)
    {
          $ite=Item::orderBy('name')->get();
            $ta=Tag::orderBy('name')->get();
        return view('item_tag.edit',compact('itemTag','ite','ta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ItemTag $itemTag)
    {
        
                 $itemTag->update($request->all());
        return redirect()->route('item_tag.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ItemTag $itemTag)
    {
          $itemTag->delete();
        return redirect()->route('itemTag.index');
    }
}
