<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\vendor_store;
use Illuminate\Http\Request;

class vendorStoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //::with('category')->
        $stores = vendor_store::all();
        return response()->view('vendorStore.index', ['stores' => $stores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categories = category::all();

        return response()->view('vendorStore.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'store_name' => 'required|string',
            'description' => 'string',
            'shipping_policy' => 'string',
            'return_privacy' => 'string',
            'keyword' => 'string',
            'meta_description' => 'string',
            'tax_number' => 'string',
            'mapLngLat' => 'string',
            // 'logo' => 'string',
            // 'banner' => 'string',
            'about_us' => 'string',
            'shipping_charges' => 'string',
            'category' => 'string',
        ]);

        $store = new vendor_store();
        $store->store_name = $request->get('store_name');
        $store->description = $request->get('description');
        $store->shipping_policy = $request->get('shipping_policy');
        $store->return_privacy = $request->get('return_privacy');
        $store->keyword = $request->get('keyword');
        $store->meta_description = $request->get('meta_description');
        $store->tax_number = $request->get('tax_number');
        $store->mapLngLat = $request->get('mapLngLat');

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $extention = $file->getClientOriginalExtension();
            $filname = time() . '.' . $extention;
            $file = move_uploaded_file('uploads/prodacts/', $filname);
            $store->logo = $filname;
        }

        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
            $extention = $file->getClientOriginalExtension();
            $filname = time() . '.' . $extention;
            $file = move_uploaded_file('uploads/prodacts/', $filname);
            $store->banner = $filname;
        }

        // $store->logo = $request->get('logo');
        // $store->banner = $request->get('banner');
        $store->about_us = $request->get('about_us');
        $store->shipping_charges = $request->get('shipping_charges');
        $store->category = $request->get('category');

        $isSave = $store->save();
        session()->flash('message', $isSave ? "save cuccessfuly" : "faild to creat");
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$categories = category::all();

        $store = vendor_store::findOrFail($id);
        return response()->view('vendorStore.edit', ['store' => $store]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'store_name' => 'required|string',
            'description' => 'string',
            'shipping_policy' => 'string',
            'return_privacy' => 'string',
            'keyword' => 'string',
            'meta_description' => 'string',
            'tax_number' => 'string',
            'mapLngLat' => 'string',
            'logo' => 'string',
            'banner' => 'string',
            'about_us' => 'string',
            'shipping_charges' => 'string',
            'category' => 'string',
        ]);

        $store = vendor_store::findOrFail($id);
        $store->store_name = $request->get('store_name');
        $store->description = $request->get('description');
        $store->shipping_policy = $request->get('shipping_policy');
        $store->return_privacy = $request->get('return_privacy');
        $store->keyword = $request->get('keyword');
        $store->meta_description = $request->get('meta_description');
        $store->tax_number = $request->get('tax_number');
        $store->mapLngLat = $request->get('mapLngLat');
        $store->logo = $request->get('logo');
        $store->banner = $request->get('banner');
        $store->about_us = $request->get('about_us');
        $store->shipping_charges = $request->get('shipping_charges');
        $store->category = $request->get('category');

        $isSave = $store->save();
        return redirect()->route('store.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(vendor_store $store)
    {
        //
        $isDeleted = $store->delete();
        return response()->json(['message' => $isDeleted ? "Deleted successfully" : "Failed to delete"], $isDeleted ? 200 : 400);
    }
}
