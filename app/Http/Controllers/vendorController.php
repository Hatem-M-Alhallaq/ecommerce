<?php

namespace App\Http\Controllers;

use App\Models\city;
use App\Models\country;
use App\Models\vendor;
use Illuminate\Http\Request;

class vendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vendors = vendor::with('city')->with('country')->get();
        // $vendors = vendor::with('country')->get();
        return response()->view('vendor.index', ['vendors' => $vendors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cities = city::all();
        $countries = country::all();
        return response()->view('vendor.create', ['cities' => $cities, 'countries' => $countries]);
    }

    public function fetchCities(Request $request)
    {
        $data['cities'] = city::where("country_id", $request->country_id)->get(["name", "id"]);
        return response()->json($data);
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
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'display_name' => 'required|string',
            'email' => 'string',
            'phone' => 'string',
            'fax' => 'string',
            'company' => 'string',
            'address1' => 'string',
            'address2' => 'string',
            'status' => 'string',
            'product_status' => 'string',
            'about_us' => 'string',
            'country' => 'string',
            'city' => 'string',
            'postal_code' => 'string',
            'state' => 'string',
            'password' => 'string',
            'image' => 'string',
            'payment_method' => 'string',
            'bank_name' => 'string',
            'branch_number' => 'string',
            'swift_code' => 'string',
            'account_name' => 'string',
            'iban_number' => 'string',
            'bank_country' => 'string',
        ]);

        $vendor = new vendor();
        $vendor->first_name = $request->get('first_name');
        $vendor->last_name = $request->get('last_name');
        $vendor->display_name = $request->get('display_name');
        $vendor->email = $request->get('email');
        $vendor->phone = $request->get('phone');
        $vendor->fax = $request->get('fax');
        $vendor->company = $request->get('company');
        $vendor->address1 = $request->get('address1');
        $vendor->address2 = $request->get('address2');
        $vendor->status = $request->has('status') ? true : false;
        $vendor->product_status = $request->get('product_status');
        $vendor->about_us = $request->get('about_us');
        $vendor->country = $request->get('country');
        $vendor->city = $request->get('city');
        $vendor->postal_code = $request->get('postal_code');
        $vendor->state = $request->get('state');
        $vendor->password = $request->get('password');
        $vendor->image = $request->get('image');
        $vendor->payment_method = $request->get('payment_method');
        $vendor->bank_name = $request->get('bank_name');
        $vendor->branch_number = $request->get('branch_number');
        $vendor->swift_code = $request->get('swift_code');
        $vendor->account_name = $request->get('account_name');
        $vendor->iban_number = $request->get('iban_number');
        $vendor->bank_country = $request->get('bank_country');

        $isSave = $vendor->save();
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
        //
        $vendor = vendor::findOrFail($id);
        $cities = city::all();
        $countries = country::all();
        return response()->view('vendor.edit', ['vendor' => $vendor, 'cities' => $cities, 'countries' => $countries]);
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
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'display_name' => 'required|string',
            'email' => 'string',
            'phone' => 'string',
            'fax' => 'string',
            'company' => 'string',
            'address1' => 'string',
            'address2' => 'string',
            'status' => 'string',
            'product_status' => 'string',
            'about_us' => 'string',
            'country' => 'string',
            'city' => 'string',
            'postal_code' => 'string',
            'state' => 'string',
            'password' => 'string',
            'image' => 'string',
            'payment_method' => 'string',
            'bank_name' => 'string',
            'branch_number' => 'string',
            'swift_code' => 'string',
            'account_name' => 'string',
            'iban_number' => 'string',
            'bank_country' => 'string',
        ]);

        $vendor = vendor::findOrFail($id);
        $vendor->first_name = $request->get('first_name');
        $vendor->last_name = $request->get('last_name');
        $vendor->display_name = $request->get('display_name');
        $vendor->email = $request->get('email');
        $vendor->phone = $request->get('phone');
        $vendor->fax = $request->get('fax');
        $vendor->company = $request->get('company');
        $vendor->address1 = $request->get('address1');
        $vendor->address2 = $request->get('address2');
        $vendor->status = $request->has('status') ? true : false;
        $vendor->product_status = $request->get('product_status');
        $vendor->about_us = $request->get('about_us');
        $vendor->country = $request->get('country');
        $vendor->city = $request->get('city');
        $vendor->postal_code = $request->get('postal_code');
        $vendor->state = $request->get('state');
        $vendor->password = $request->get('password');
        $vendor->image = $request->get('image');
        $vendor->payment_method = $request->get('payment_method');
        $vendor->bank_name = $request->get('bank_name');
        $vendor->branch_number = $request->get('branch_number');
        $vendor->swift_code = $request->get('swift_code');
        $vendor->account_name = $request->get('account_name');
        $vendor->iban_number = $request->get('iban_number');
        $vendor->bank_country = $request->get('bank_country');

        $isSave = $vendor->save();
        return redirect()->route('vendors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(vendor $vendor)
    {
        //
        $isDeleted = $vendor->delete();
        return response()->json(['message' => $isDeleted ? "Deleted successfully" : "Failed to delete"], $isDeleted ? 200 : 400);
    }
}
