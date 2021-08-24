<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Country, City};


class CountryCityController extends Controller
{
    //
    public function index()
    {
        $data['countries'] = Country::get(["name", "id"]);
        return view('country-city', $data);
    }
    public function getCity(Request $request)
    {
        $data['cities'] = City::where("country_id	", $request->country_id)
            ->get(["name", "id"]);
        return response()->json($data);
    }
}
