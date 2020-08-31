<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function create(Request $request){
        $country = new Country();
        $country->nameAR = $request['nameAR'];
        $country->nameEN = $request['nameEN'];
        $country->iso = $request['iso'];
        $country->save();

        return response()->json(['success' => 'created'], 200);
    }

    public function show(){
        $countries = Country::all();
        return view('dashboard.country.country', compact('countries'));
    }

    public function edit($id){
        $country = Country::FindOrFail($id);
        return view('dashboard.country.editCountry', compact('country'));
    }

    public function update(Request $request){
        $id = $request['id'];
        $nameAR = $request['nameAR'];
        $nameEN = $request['nameEN'];
        $iso = $request['iso'];

        $country = Country::findOrFail($id);
        $country->nameAR = $nameAR;
        $country->nameEN = $nameEN;
        $country->iso = $iso;
        $country->save();

        return response()->json(['success' => 'updated'], 200);
    }

    public function delete(Request $request){
        $id = $request['id'];
        $country = Country::findOrFail($id);
        $country->forceDelete();

        return response()->json(['success' => 'deleted'], 200);
    }
}
