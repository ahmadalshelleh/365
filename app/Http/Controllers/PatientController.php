<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\City;
use App\Models\Country;
use App\Models\Image;
use App\Models\Insurance;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PatientController extends Controller
{
    public function addPage()
    {
        $insurances = Insurance::all();
        $countries = Country::all();
        return view('dashboard.patients.addPatient', compact(['insurances', 'countries']));
    }

    public function create(Request $request)
    {
        $nameAR = $request['nameAR'];
        $nameEN = $request['nameEN'];
        $date = $request['date'];
        $email = $request['email'];
        $password = $request['password'];
        $status = $request['status'];
        $gender = $request['gender'];
        $blood = $request['blood'];
        $made_surgery = $request['made_surgery'];
        $diabetes = $request['diabetes'];
        $hypertension = $request['hypertension'];
        $disability = $request['disability'];
        $health_problem = $request['health_problem'];
        $allergy_for_drug = $request['allergy_for_drug'];
        $country_id = $request['country_id'];
        $city_id = $request['city_id'];
        $area_id = $request['area_id'];
        $insurance_id = $request['insurance_id'];
        $location = $request['location'];
        $lat = $request['lat'];
        $long = $request['long'];
        $image = $request['image'];


        $folderPath = "/images/";

        $image_parts = explode(";base64,", $image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $image_name = uniqid() . '.' . $image_type;
        $file = $folderPath . $image_name;

        Storage::disk('public')->put($file, $image_base64);

        $image = new Image();
        $image->name = $image_name;
        $image->save();

        $user = new User();
        $user->image_id = $image->id;
        $user->email = $email;
        $user->country_id = $country_id;
        $user->city_id = $city_id;
        $user->area_id = $area_id;
        $user->location = $location;
        $user->password = Hash::make($password);
        $user->role = 2;
        $user->auth = Str::random(32);
        $user->save();

        $patient = new Patient();
        $patient->user_id = $user->id;
        $patient->nameAR = $nameAR;
        $patient->nameEN = $nameEN;
        $patient->date = $date;
        $patient->insurance_id = $insurance_id;
        $patient->blood = $blood;
        $patient->made_surgery = $made_surgery;
        $patient->diabetes = $diabetes;
        $patient->hypertension = $hypertension;
        $patient->disability = $disability;
        $patient->health_problem = $health_problem;
        $patient->allergy_for_drug = $allergy_for_drug;
        $patient->lat = $lat;
        $patient->long = $long;
        $patient->gender = $gender;
        $patient->status = $status;
        $patient->save();

        return response()->json(['success' => 'created'], 200);
    }

    public function show(){
        $patients = Patient::with(['image', 'user'])->get();
        return view('dashboard.patients.patients', compact('patients'));
    }

    public function edit($id){
        $patient = Patient::findOrFail($id)->with(['image', 'user'])->get();
        $insurances = Insurance::all();
        $countries = Country::all();
        $cities = City::all()->where('country_id', $patient[0]->user->country_id);
        $areas = Area::all()->where('city_id', $patient[0]->user->city_id);
        return view('dashboard.patients.editPatient', compact(['patient', 'insurances', 'countries', 'cities', 'areas']));
    }

    public function update(Request $request){
        $patient_id = $request['patient_id'];
        $nameAR = $request['nameAR'];
        $nameEN = $request['nameEN'];
        $date = $request['date'];
        $email = $request['email'];
        $password = $request['password'];
        $status = $request['status'];
        $gender = $request['gender'];
        $blood = $request['blood'];
        $made_surgery = $request['made_surgery'];
        $diabetes = $request['diabetes'];
        $hypertension = $request['hypertension'];
        $disability = $request['disability'];
        $health_problem = $request['health_problem'];
        $allergy_for_drug = $request['allergy_for_drug'];
        $country_id = $request['country_id'];
        $city_id = $request['city_id'];
        $area_id = $request['area_id'];
        $insurance_id = $request['insurance_id'];
        $location = $request['location'];
        $lat = $request['lat'];
        $long = $request['long'];


        $patientInfo = Patient::findOrFail($patient_id)->with(['image', 'user'])->get();
        $user_id = $patientInfo[0]->user->id;
        $image_id = $patientInfo[0]->image->id;

        $user = User::findOrFail($user_id);
        $user->email = $email;
        $user->country_id = $country_id;
        $user->city_id = $city_id;
        $user->area_id = $area_id;
        $user->location = $location;
        if(isset($request['password'])){
            $user->password = Hash::make($password);
        }
        $user->save();


        $patient = Patient::findOrFail($patient_id);
        $patient->user_id = $user->id;
        $patient->nameAR = $nameAR;
        $patient->nameEN = $nameEN;
        $patient->date = $date;
        $patient->insurance_id = $insurance_id;
        $patient->blood = $blood;
        $patient->made_surgery = $made_surgery;
        $patient->diabetes = $diabetes;
        $patient->hypertension = $hypertension;
        $patient->disability = $disability;
        $patient->health_problem = $health_problem;
        $patient->allergy_for_drug = $allergy_for_drug;
        $patient->lat = $lat;
        $patient->long = $long;
        $patient->gender = $gender;
        $patient->status = $status;
        $patient->save();



        if(isset($request['image'])){
            $image = Image::findOrFail($image_id);
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

    }

    public function delete(Request $request){
        $id = $request['id'];
        $patientInfo = Patient::findOrFail($id)->with(['image', 'user'])->get();

        $patient = Patient::findOrFail($id);
        $user = User::findOrFail($patientInfo[0]->user->id);
        $image = Image::findOrFail($patientInfo[0]->image->id);
        $image_name = $patientInfo[0]->image->name;

        if(\File::exists(public_path("/uploads/images/".$image_name))) {
            \File::delete(public_path("/uploads/images/".$image_name));
        }

        $patient->forceDelete();
        $user->forceDelete();
        $image->forceDelete();

        return response()->json(['success' => 'deleted'], 200);
    }

}