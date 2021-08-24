<?php

namespace App\Http\Controllers;

use App\Models\contactus;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contacts = contactus::all();
        return response()->view('contactUs.index', ['contacts' => $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return response()->view('contactUs.create');
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
            'from_id' => 'string|date',
            'to_id' => 'string|date',
            'title' => 'string',
            'details' => 'string',
            'status' => 'in:on',
        ]);
        $contact = new contactus();
        $contact->from_id = $request->get('from_id');
        $contact->to_id = $request->get('to_id');
        $contact->title = $request->get('title');
        $contact->details = $request->get('details');
        $contact->status = $request->has('status') ? true : false;
        $isSaved = $contact->save();
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
        $contact = contactus::findOrFail($id);
        return response()->view('contactUs.edit', ['contact' => $contact]);
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
            'from_id' => 'string|date',
            'to_id' => 'string|date',
            'title' => 'string',
            'details' => 'string',
            'status' => 'in:on',
        ]);
        $contact = contactus::findOrFail($id);
        $contact->from_id = $request->get('from_id');
        $contact->to_id = $request->get('to_id');
        $contact->title = $request->get('title');
        $contact->details = $request->get('details');
        $contact->status = $request->has('status') ? true : false;

        $isSaved = $contact->save();
        return redirect()->route('contactUs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(contactus $contact)
    {
        //
        $isDeleted = $contact->delete();
        return response()->json(['message' => $isDeleted ? "Deleted successfully" : "Failed to delete"], $isDeleted ? 200 : 400);
    }
}
