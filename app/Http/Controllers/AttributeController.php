<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\Controller;
use App\Models\attribute;
use App\Models\attribute_group;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $attributes = attribute::with('attributeGroup')->get();
        return response()->view('attribute.index', ['attributes' => $attributes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $groups = attribute_group::all();
        return response()->view('attribute.create', ['groups' => $groups]);
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
            'group_id' => 'string'
        ]);
        $attribute = new attribute();
        $attribute->name = $request->get('name');
        $attribute->group_id = $request->get('group_id');
        $isSaved = $attribute->save();
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
        $attribute = attribute::findOrFail($id);
        $groups = attribute_group::all();
        return response()->view('attribute.edit', ['attribute' => $attribute, 'groups' => $groups]);
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
            'group_id' => 'required',
        ]);
        $attribute = attribute::findOrFail($id);
        $attribute->name = $request->get('name');
        $attribute->group_id = $request->get('group_id');

        $isSave = $attribute->save();
        return redirect()->route('attribute.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(attribute $attribute)
    {
        //
        $isDeleted = $attribute->delete();
        return response()->json(['message' => $isDeleted ? "Deleted successfully" : "Failed to delete"], $isDeleted ? 200 : 400);
    }
}
