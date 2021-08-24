<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class DynamicDependent extends Controller
{
    //
    function index()
    {
        $country_list = DB::table('country_state_city')
            ->groupBy('country')
            ->get();
        return view('dynamic_dependent')->with('country_list', $country_list);
    }
}
