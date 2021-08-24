<?php

namespace App\Http\Controllers;

use App\Models\administrator;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = administrator::get();
        return response()->view('admin.index', ['admins' => $admins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return response()->view('admin.create');
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
            'full_name' => 'required|string|max:30|min:3',
            'email' => 'required|email',
            'mobile' => 'required',
            'address' => 'string',
            'status' => 'in:on',
        ]);
        $admin = new administrator();
        $admin->full_name = $request->get('full_name');
        $admin->email = $request->get('email');
        $admin->mobile = $request->get('mobile');
        $admin->address = $request->get('address');
        $admin->status = $request->has('status') ? true : false;
        $isSaved = $admin->save();
        session()->flash('message', $isSaved ? "save cuccessfuly" : "faild to creat");
        return redirect()->back();

        // $validator = Validator($request->all(), [
        //     'full_name' => 'required|string|max:30|min:3',
        //     'email' => 'required|email',
        //     'mobile' => 'required',
        //     'address'=>'required',
        //     'status'=>'in:on',
        // ]);

        // if (!$validator->fails()) {
        //     $admin = new administrator();
        //     $admin->full_name = $request->get('full_name');
        //     $admin->email = $request->get('email');
        //     $admin->mobile = $request->get('mobile');
        //     $admin->address = $request->get('address');
        //     $admin->status = $request->has('status') ? true : false;
        //     $isSaved = $admin->save();

        //     return response()->json(['message' => $isSaved ? 'Created successfully' : "Failed to create"], $isSaved ? 201 : 400);
        // } else {
        //     return response()->json(['message' => $validator->getMessageBag()->first()], 400);
        // }


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
        $admin = administrator::findOrFail($id);
        return response()->view('admin.edit', ['admin' => $admin]);
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
            'full_name' => 'required|string|max:30|min:3',
            'email' => 'required|email',
            'mobile' => 'required',
            'address' => 'string',
            'status' => 'in:on',
        ]);
        $admin = administrator::findOrFail($id);
        $admin->full_name = $request->get('full_name');
        $admin->email = $request->get('email');
        $admin->mobile = $request->get('mobile');
        $admin->address = $request->get('address');
        $admin->status = $request->has('status') ? true : false;
        $isSaved = $admin->save();
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(administrator $admin)
    {
        //
        $isDeleted = $admin->delete();
        return response()->json(['message' => $isDeleted ? "Deleted successfully" : "Failed to delete"], $isDeleted ? 200 : 400);
    }
}
