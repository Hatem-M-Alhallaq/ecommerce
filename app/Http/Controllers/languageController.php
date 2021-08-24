<?php

namespace App\Http\Controllers;

use App\Models\language;
use Illuminate\Http\Request;

class languageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $languages = language::all();
        return response()->view('language.index', ['languages' => $languages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return response()->view('language.create');
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
            'code' => 'string',
            'file' => 'string',
            'status' => 'string',
        ]);

        $language = new language();
        $language->name = $request->get('name');
        $language->code = $request->get('code');
        $language->file = $request->get('file');
        $language->status = $request->has('status') ? true : false;

        $isSave = $language->save();
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
        $language = language::findOrFail($id);
        return response()->view('language.edit', ['language' => $language]);
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
            'code' => 'string',
            'file' => 'string',
            'status' => 'string',
        ]);

        $language = language::findOrFail($id);
        $language->name = $request->get('name');
        $language->code = $request->get('code');
        $language->file = $request->get('file');
        $language->status = $request->has('status') ? true : false;
        $isSave = $language->save();
        return redirect()->route('language.index');
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
        $isDestroyed = language::destroy($id);
        if ($isDestroyed) {
            return response()->json(['icon' => 'success', 'title' => 'Deleted successfully'], 200);
        } else {
            return response()->json(['icon' => 'error', 'title' => 'Failed to delete'], 400);
        }
    }
}
