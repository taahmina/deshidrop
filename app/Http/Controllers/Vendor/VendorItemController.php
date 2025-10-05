<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Vendor;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class VendorItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vendorId = auth()->guard('vendor')->id();
        $data=Item::where('vendor_id',$vendorId)->get();
        return view('vendor_panel.item.index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cat=Category::orderBy('name')->get();
        $ta=Tag::orderBy('name')->get();

        return view('vendor_panel.item.create',compact('cat','ta'));
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        $input = $request->all();
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('uploads/items'), $imageName);
            $input['image'] = 'items/' . $imageName;
        }

        $input['vendor_id']=auth()->guard('vendor')->id();
        $item = Item::create($input);
        if ($request->has('tag_id')) {
            $item->tags()->attach($request->tag_id);
        }

        return redirect()->route('vendor_panel.item.index')->with('success', 'Item created successfully');
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
        return view('vendor_panel.item.edit',compact('item','ven','cat','ta'));
    }

    /**
     * Update the specified resource in storage.
     */


    public function update(Request $request, Item $item)
    {
        $input = $request->except('image');

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/items'), $imageName);
            $input['image'] = 'items/' . $imageName;

            if ($item->image && file_exists(public_path($item->image))) {
                unlink(public_path($item->image));
            }
        }

        $item->update($input);

        if ($request->has('tag_id')) {
            $item->tags()->sync($request->tag_id);
        }

        return redirect()->route('vendor_panel.item.index')->with('success', 'Item updated successfully');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
         $item->delete();
        return redirect()->route('vendor_panel.item.index');
    }
}
