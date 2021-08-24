<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\city;
use App\Models\country;
use App\Models\prodact;
use App\Models\vendor;
use App\Models\vendor_store;
use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$store->store_name
        // $products = prodact::with('category')->get();
        $products = prodact::with('vendor')->with('vendor_store')->get();
        return response()->view('product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = category::all();
        $vendors = vendor::all();
        $stores = vendor_store::all();
        $cities = city::all();
        $countries = country::all();
        return response()->view('product.create', ['categories' => $categories, 'vendors' => $vendors, 'stores' => $stores, 'cities' => $cities, 'countries' => $countries]);
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
            'name' => 'required|string',
            'details' => 'string|required',
            // 'image' => 'string',
            'meta_tags' => 'string',
            'meta_description' => 'string',
            'product_tags' => 'string',
            'category_id' => 'string',
            'sku' => 'string',
            'upc' => 'string',
            'EAN' => 'string',
            'JAN' => 'string',
            'MPN' => 'string',
            'country' => 'string',
            'city' => 'string',
            'tax' => 'string',
            'minimum_qnty' => 'string',
            'stock_status' => 'string',
            'requir_shipping' => 'string',
            'date_available' => 'date',
            'dimensions' => 'string',
            'lenght_class' => 'string',
            'weight' => 'string',
            'weight_class' => 'string',
            'sort_order' => 'string',
            'status' => 'in:on',
            'vendor_id' => 'string',
            'store_id' => 'string',
            'model' => 'string',
            'old_price' => 'string',
            'price' => 'string',
        ]);

        $prodact = new prodact();
        $prodact->name = $request->get('name');
        $prodact->details = $request->get('details');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filname = time() . '.' . $extention;
            $file = move_uploaded_file('uploads/prodacts/', $filname);
            $prodact->image = $filname;
        }
        // $prodact->image = $request->get('image');
        $prodact->meta_tags = $request->get('meta_tags');
        $prodact->meta_description = $request->get('meta_description');
        $prodact->product_tags = $request->get('product_tags');
        $prodact->category_id = $request->get('category_id');
        $prodact->sku = $request->get('sku');
        $prodact->upc = $request->get('upc');
        $prodact->EAN = $request->get('EAN');
        $prodact->JAN = $request->get('JAN');
        $prodact->MPN = $request->get('MPN');
        $prodact->country = $request->get('country');
        $prodact->city = $request->get('city');
        $prodact->tax = $request->get('tax');
        $prodact->minimum_qnty = $request->get('minimum_qnty');
        $prodact->stock_status = $request->get('stock_status');
        $prodact->requir_shipping = $request->get('requir_shipping');
        $prodact->date_available = $request->get('date_available');
        $prodact->dimensions = $request->get('dimensions');
        $prodact->lenght_class = $request->get('lenght_class');
        $prodact->weight = $request->get('weight');
        $prodact->weight_class = $request->get('weight_class');
        $prodact->sort_order = $request->get('sort_order');
        $prodact->status = $request->has('status') ? true : false;
        $prodact->vendor_id = $request->get('vendor_id');
        $prodact->store_id = $request->get('store_id');
        $prodact->model = $request->get('model');
        $prodact->old_price = $request->get('old_price');
        $prodact->price = $request->get('price');

        $isSave = $prodact->save();
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
        $prodact = prodact::findOrFail($id);
        $categories = category::all();
        $vendors = vendor::all();
        $stores = vendor_store::all();
        return response()->view('product.edit', ['prodact' => $prodact, 'categories' => $categories, 'vendors' => $vendors, 'stores' => $stores]);
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
            'name' => 'required|string',
            'details' => 'string|required',
            'image' => 'string',
            'meta_tags' => 'string',
            'meta_description' => 'string',
            'product_tags' => 'string',
            'category_id' => 'string',
            'sku' => 'string',
            'upc' => 'string',
            'EAN' => 'string',
            'JAN' => 'string',
            'MPN' => 'string',
            'country' => 'string',
            'city' => 'string',
            'tax' => 'string',
            'minimum_qnty' => 'string',
            'stock_status' => 'string',
            'requir_shipping' => 'string',
            'date_available' => 'date',
            'dimensions' => 'string',
            'lenght_class' => 'string',
            'weight' => 'string',
            'weight_class' => 'string',
            'sort_order' => 'string',
            // 'status' => 'string',
            'status' => 'in:on',
            'vendor_id' => 'string',
            'store_id' => 'string',
            'model' => 'string',
            'old_price' => 'string',
            'price' => 'string',
        ]);

        $prodact = prodact::findOrFail($id);
        $prodact->name = $request->get('name');
        $prodact->details = $request->get('details');
        $prodact->image = $request->get('image');
        $prodact->meta_tags = $request->get('meta_tags');
        $prodact->meta_description = $request->get('meta_description');
        $prodact->product_tags = $request->get('product_tags');
        $prodact->category_id = $request->get('category_id');
        $prodact->sku = $request->get('sku');
        $prodact->upc = $request->get('upc');
        $prodact->EAN = $request->get('EAN');
        $prodact->JAN = $request->get('JAN');
        $prodact->MPN = $request->get('MPN');
        $prodact->country = $request->get('country');
        $prodact->city = $request->get('city');
        $prodact->tax = $request->get('tax');
        $prodact->minimum_qnty = $request->get('minimum_qnty');
        $prodact->stock_status = $request->get('stock_status');
        $prodact->requir_shipping = $request->get('requir_shipping');
        $prodact->date_available = $request->get('date_available');
        $prodact->dimensions = $request->get('dimensions');
        $prodact->lenght_class = $request->get('lenght_class');
        $prodact->weight = $request->get('weight');
        $prodact->weight_class = $request->get('weight_class');
        $prodact->sort_order = $request->get('sort_order');
        $prodact->status = $request->has('status') ? true : false;
        $prodact->vendor_id = $request->get('vendor_id');
        $prodact->store_id = $request->get('store_id');
        $prodact->model = $request->get('model');
        $prodact->old_price = $request->get('old_price');
        $prodact->price = $request->get('price');

        $isSave = $prodact->save();
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(prodact $prodact,$id)
    {
        //
        $isDestroyed = prodact::destroy($id);
        if ($isDestroyed) {
            return response()->json(['icon' => 'success', 'title' => 'Deleted successfully'], 200);
        } else {
            return response()->json(['icon' => 'error', 'title' => 'Failed to delete'], 400);
        }

        // $isDeleted = $prodact->delete();
        // return response()->json(['message' => $isDeleted ? "Deleted successfully" : "Failed to delete"], $isDeleted ? 200 : 400);
    }
}
