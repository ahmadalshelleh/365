<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\City;
use App\Models\Country;
use App\Models\Clinic;
use App\Models\Insurance;
use Illuminate\Http\Request;

class ClinicController extends Controller
{
    public function addPage(){
        $countries = Country::all();
        $insurances = Insurance::all();
        return view('dashboard.clinic.addClinic', compact(['countries', 'insurances']));
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
        $email = $request['email'];
        $phone = $request['phone'];
        $active = $request['active'];
        $country_id = $request['country_id'];
        $city_id = $request['city_id'];
        $area_id = $request['area_id'];
        $location = $request['location'];
        $insurance_id = $request['insurance_id'];
        $lat = $request['lat'];
        $long = $request['long'];

        $clinic = new Clinic();
        $clinic->nameAR = $nameAR;
        $clinic->nameEN = $nameEN;
        $clinic->email = $email;
        $clinic->phone = $phone;
        $clinic->active = $active;
        $clinic->country_id = $country_id;
        $clinic->city_id = $city_id;
        $clinic->area_id = $area_id;
        $clinic->location = $location;
        $clinic->insurance_id = $insurance_id;
        $clinic->lat = $lat;
        $clinic->long = $long;
        $clinic->save();

        return response()->json(['success' => 'created'], 200);
    }

    public function show(){
        $clinics = Clinic::all();
        return view('dashboard.clinic.clinic', compact('clinics'));
    }

    public function edit($id){
        $clinic = Clinic::findOrFail($id);
        $countries = Country::all();
        $cities = City::all()->where('country_id', $clinic->country_id);
        $areas = Area::all()->where('city_id', $clinic->city_id);
        $insurances = Insurance::all();

        return view('dashboard.clinic.editClinic', compact(['clinic', 'countries', 'cities', 'areas', 'insurances']));
    }

    public function update(Request $request){
        $clinic_id = $request['clinic_id'];
        $nameAR = $request['nameAR'];
        $nameEN = $request['nameEN'];
        $email = $request['email'];
        $phone = $request['phone'];
        $active = $request['active'];
        $country_id = $request['country_id'];
        $city_id = $request['city_id'];
        $area_id = $request['area_id'];
        $insurance_id = $request['insurance_id'];
        $location = $request['location'];
        $lat = $request['lat'];
        $long = $request['long'];

        $clinic = Clinic::findOrFail($clinic_id);
        $clinic->nameAR = $nameAR;
        $clinic->nameEN = $nameEN;
        $clinic->active = $active;
        $clinic->email = $email;
        $clinic->phone = $phone;
        $clinic->country_id = $country_id;
        $clinic->city_id = $city_id;
        $clinic->area_id = $area_id;
        $clinic->location = $location;
        $clinic->insurance_id = $insurance_id;
        $clinic->lat = $lat;
        $clinic->long = $long;
        $clinic->save();

        return response()->json(['success' => 'updated'], 200);
    }

    public function delete(Request $request){
        $id = $request['id'];
        $clinic = Clinic::findOrFail($id);
        $clinic->forceDelete();

        return response()->json(['success' => 'deleted'], 200);
    }
}
