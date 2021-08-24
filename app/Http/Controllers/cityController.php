<?php

namespace App\Http\Controllers;

use App\Models\city;
use App\Models\country;
use Illuminate\Http\Request;

class cityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cities = city::with('country')->get();
        return response()->view('city.index', ['cities' => $cities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $countries = country::all();
        return response()->view('city.create', ['countries' => $countries]);
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
            'name' => 'required|string|max:30|min:1',
            'country_id' => 'string',
            'status' => 'in:on',
        ]);

        $city = new city();
        $city->name = $request->get('name');
        $city->country_id = $request->get('country_id');
        $city->status = $request->has('status') ? true : false;

        $isSaved = $city->save();
        session()->flash('message', $isSaved ? "save cuccessfuly" : "faild to creat");
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
        $city = city::findOrFail($id);
        $countries = country::all();
        return response()->view('city.edit', ['city' => $city, 'countries' => $countries]);
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
            'name' => 'required|string|max:30|min:1',
            'country_id' => 'string',
            'status' => 'in:on',
        ]);

        $city = city::findOrFail($id);
        $city->name = $request->get('name');
        $city->country_id = $request->get('country_id');
        $city->status = $request->has('status') ? true : false;

        $isSaved = $city->save();
        return redirect()->route('city.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(city $city)
    {
        //
        $isDeleted = $city->delete();
        return response()->json(['message' => $isDeleted ? "Deleted successfully" : "Failed to delete"], $isDeleted ? 200 : 400);
    }
}