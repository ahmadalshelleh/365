<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\City;
use App\Models\Country;
use App\Models\Image;
use App\Models\Insurance;
use App\Models\Pharmacy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PharmacyController extends Controller
{
    public function addPage(){
        $countries = Country::all();
        $insurances = Insurance::all();
        return view('dashboard.pharmacy.addPharmacy', compact(['countries', 'insurances']));
    }

    public function create(Request $request){
        $nameAR = $request['nameAR'];
        $nameEN = $request['nameEN'];
        $ownerAR = $request['ownerAR'];
        $ownerEN = $request['ownerEN'];
        $email = $request['email'];
        $phone = $request['phone'];
        $mobile = $request['mobile'];
        $active = $request['active'];
        $country_id = $request['country_id'];
        $city_id = $request['city_id'];
        $area_id = $request['area_id'];
        $location = $request['location'];
        $insurance_id = $request['insurance_id'];
        $lat = $request['lat'];
        $long = $request['long'];
        $image = $request['image'];

        $folderPath = "/images/";

        $image_parts = explode(";base64,", $image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $image_name = uniqid() . '.'.$image_type;
        $file = $folderPath . $image_name;

        Storage::disk('public')->put($file, $image_base64);

        $image = new Image();
        $image->name = $image_name;
        $image->save();


        $pharmacy = new Pharmacy();
        $pharmacy->image_id = $image->id;
        $pharmacy->nameAR = $nameAR;
        $pharmacy->nameEN = $nameEN;
        $pharmacy->ownerAR = $ownerAR;
        $pharmacy->ownerEN = $ownerEN;
        $pharmacy->email = $email;
        $pharmacy->phone = $phone;
        $pharmacy->mobile = $mobile;
        $pharmacy->active = $active;
        $pharmacy->country_id = $country_id;
        $pharmacy->city_id = $city_id;
        $pharmacy->area_id = $area_id;
        $pharmacy->location = $location;
        $pharmacy->insurance_id = $insurance_id;
        $pharmacy->lat = $lat;
        $pharmacy->long = $long;
        $pharmacy->save();

        return response()->json(['success' => 'created'], 200);
    }

    public function show(){
        $pharmacies = Pharmacy::all();
        return view('dashboard.pharmacy.pharmacy', compact('pharmacies'));
    }

    public function edit($id){
        $pharmacy = Pharmacy::findOrFail($id);
        $image = Pharmacy::findOrFail($id)->image;
        $countries = Country::all();
        $cities = City::all()->where('country_id', $pharmacy->country_id);
        $areas = Area::all()->where('city_id', $pharmacy->city_id);
        $insurances = Insurance::all();
        return view('dashboard.pharmacy.editPharmacy', compact(['pharmacy', 'image', 'countries', 'cities', 'areas', 'insurances']));
    }

    public function update(Request $request){
        $pharmacy_id = $request['pharmacy_id'];
        $nameAR = $request['nameAR'];
        $nameEN = $request['nameEN'];
        $ownerAR = $request['ownerAR'];
        $ownerEN = $request['ownerEN'];
        $email = $request['email'];
        $phone = $request['phone'];
        $mobile = $request['mobile'];
        $active = $request['active'];
        $country_id = $request['country_id'];
        $city_id = $request['city_id'];
        $area_id = $request['area_id'];
        $location = $request['location'];
        $insurance_id = $request['insurance_id'];
        $lat = $request['lat'];
        $long = $request['long'];

        $pharmacy = Pharmacy::findOrFail($pharmacy_id);
        $pharmacy->nameAR = $nameAR;
        $pharmacy->nameEN = $nameEN;
        $pharmacy->ownerAR = $ownerAR;
        $pharmacy->ownerEN = $ownerEN;
        $pharmacy->email = $email;
        $pharmacy->phone = $phone;
        $pharmacy->mobile = $mobile;
        $pharmacy->active = $active;
        $pharmacy->country_id = $country_id;
        $pharmacy->city_id = $city_id;
        $pharmacy->area_id = $area_id;
        $pharmacy->location = $location;
        $pharmacy->insurance_id = $insurance_id;
        $pharmacy->lat = $lat;
        $pharmacy->long = $long;
        $pharmacy->save();

        if(isset($request['image'])){
            $image = Pharmacy::findOrFail($pharmacy_id)->image;
            $oldImage = $image->name;
            $newImage = $request['image'];
            $old_image_path = "/uploads/images/".$oldImage;
            if(\File::exists(public_path($old_image_path))) {
                \File::delete(public_path($old_image_path));
            }

            $folderPath = "/images/";

            $image_parts = explode(";base64,", $newImage);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $image_name = uniqid() . '.'.$image_type;
            $file = $folderPath . $image_name;

            Storage::disk('public')->put($file, $image_base64);

            $image->name = $image_name;
            $image->save();
        }


        return response()->json(['success' => 'updated'], 200);
    }

    public function delete(Request $request){
        $id = $request['id'];
        $image = Pharmacy::findOrFail($id)->image;
        $pharmacy = Pharmacy::findOrFail($id);
        $pharmacy->forceDelete();
        $image->forceDelete();

        return response()->json(['success' => 'deleted'], 200);
    }
}
