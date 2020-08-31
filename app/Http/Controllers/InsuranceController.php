<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\City;
use App\Models\Country;
use App\Models\Insurance;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{
    public function addPage(){
        $countries = Country::all();
        return view('dashboard.insurance.addInsurance', compact('countries'));
    }

    public function getCities(Request $request){
        $country_id = $request['country_id'];
        $cities = City::all()->where('country_id',$country_id);

        return response()->json(['cities' => $cities], 200);
    }

    public function getAreas(Request $request){
        $city_id = $request['city_id'];
        $areas = Area::all()->where('city_id',$city_id);

        return response()->json(['areas' => $areas], 200);
    }

    public function create(Request $request){
        $nameAR = $request['nameAR'];
        $nameEN = $request['nameEN'];
        $active = $request['active'];
        $country_id = $request['country_id'];
        $city_id = $request['city_id'];
        $area_id = $request['area_id'];
        $location = $request['location'];
        $lat = $request['lat'];
        $long = $request['long'];

        $insurance = new Insurance();
        $insurance->nameAR = $nameAR;
        $insurance->nameEN = $nameEN;
        $insurance->active = $active;
        $insurance->country_id = $country_id;
        $insurance->city_id = $city_id;
        $insurance->area_id = $area_id;
        $insurance->location = $location;
        $insurance->lat = $lat;
        $insurance->long = $long;
        $insurance->save();

        return response()->json(['success' => 'created'], 200);
    }

    public function show(){
        $insurances = Insurance::all();
        return view('dashboard.insurance.insurance', compact('insurances'));
    }

    public function edit($id){
        $insurance = Insurance::findOrFail($id);
        $countries = Country::all();
        $cities = City::all()->where('country_id', $insurance->country_id);
        $areas = Area::all()->where('city_id', $insurance->city_id);

        return view('dashboard.insurance.editInsurance', compact(['insurance', 'countries', 'cities', 'areas']));
    }

    public function update(Request $request){
        $insurance_id = $request['insurance_id'];
        $nameAR = $request['nameAR'];
        $nameEN = $request['nameEN'];
        $active = $request['active'];
        $country_id = $request['country_id'];
        $city_id = $request['city_id'];
        $area_id = $request['area_id'];
        $location = $request['location'];
        $lat = $request['lat'];
        $long = $request['long'];

        $insurance = Insurance::findOrFail($insurance_id);
        $insurance->nameAR = $nameAR;
        $insurance->nameEN = $nameEN;
        $insurance->active = $active;
        $insurance->country_id = $country_id;
        $insurance->city_id = $city_id;
        $insurance->area_id = $area_id;
        $insurance->location = $location;
        $insurance->lat = $lat;
        $insurance->long = $long;
        $insurance->save();

        return response()->json(['success' => 'updated'], 200);
    }

    public function delete(Request $request){
        $id = $request['id'];
        $insurance = Insurance::findOrFail($id);
        $insurance->forceDelete();

        return response()->json(['success' => 'deleted'], 200);
    }
}
