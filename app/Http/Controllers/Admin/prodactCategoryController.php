<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\prodact;
use App\Models\prodact_category;
use Illuminate\Http\Request;

class prodactCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $prodactCategories = prodact_category::with('product')->get();
        return response()->view('prodactCategories.index', ['prodactCategories' => $prodactCategories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $prodacts = prodact::all();
        return response()->view('prodactCategories.create', ['prodacts' => $prodacts]);
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
            'description' => 'string',
            'product_id' => 'string',
            // 'image' => 'string',
            // 'icon' => 'string',
            'meta_tags' => 'string',
            'meta_description' => 'string',
            'keywords' => 'string',
        ]);

        $prodactCategory = new prodact_category();
        $prodactCategory->name = $request->get('name');
        $prodactCategory->description = $request->get('description');
        $prodactCategory->product_id = $request->get('product_id');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filname = time() . '.' . $extention;
            $file = move_uploaded_file('uploads/prodacts/', $filname);
            $prodactCategory->image = $filname;
        }
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $extention = $file->getClientOriginalExtension();
            $filname = time() . '.' . $extention;
            $file = move_uploaded_file('uploads/prodacts/', $filname);
            $prodactCategory->icon = $filname;
        }

        // $prodactCategory->image = $request->get('image');
        // $prodactCategory->icon = $request->get('icon');
        $prodactCategory->meta_tags = $request->get('meta_tags');
        $prodactCategory->meta_description = $request->get('meta_description');
        $prodactCategory->keywords = $request->get('keywords');

        $isSave = $prodactCategory->save();
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
