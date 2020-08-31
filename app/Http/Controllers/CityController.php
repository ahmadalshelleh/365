<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function addPage(){
        $countries = Country::all();
        return view('dashboard.city.addCity', compact('countries'));
    }

    public function create(Request $request){
        $city = new City();
        $city->nameEN = $request['nameEN'];
        $city->nameAR = $request['nameAR'];
        $city->country_id = $request['country_id'];
        $city->save();

        return response()->json(['success' => 'created'], 200);
    }

    public function show(){
        $cities = City::all();
        return view('dashboard.city.city', compact('cities'));
    }

    public function edit($id){
        $country = City::findOrFail($id)->country;
        $city = City::findOrFail($id);
        $countries = Country::all();
        return view('dashboard.city.editCity', compact(['country', 'city', 'countries']));
    }

    public function update(Request $request){
        $id = $request['id'];
        $nameAR = $request['nameAR'];
        $nameEN = $request['nameEN'];
        $country_id = $request['country_id'];

        $city = City::findOrFail($id);
        $city->nameAR = $nameAR;
        $city->nameEN = $nameEN;
        $city->country_id = $country_id;
        $city->save();

        return response()->json(['success' => 'updated'], 200);
    }

    public function delete(Request $request){
        $id = $request['id'];
        $city = City::findOrFail($id);
        $city->forceDelete();

        return response()->json(['success' => 'deleted'], 200);
    }
}
