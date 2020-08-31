<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\City;
use App\Models\Clinic;
use App\Models\Country;
use App\Models\Doctor;
use App\Models\Duration;
use App\Models\Image;
use App\Models\Insurance;
use App\Models\Specialization;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DoctorController extends Controller
{
    public function addPage(){
        $clinics = Clinic::all();
        $direct = Specialization::all()->where('type', 'direct');
        $general = Specialization::all()->where('type', 'general');
        $insurances = Insurance::all();
        $countries = Country::all();
        $durations = Duration::all();

        return view('dashboard.doctors.addDoctor', compact(['clinics', 'direct', 'general', 'insurances', 'countries', 'durations']));
    }

    public function create(Request $request){
        $nameAR = $request['nameAR'];
        $nameEN = $request['nameEN'];
        $servicesAR = $request['servicesAR'];
        $servicesEN = $request['servicesEN'];
        $titleAR = $request['titleAR'];
        $titleEN = $request['titleEN'];
        $phone = $request['phone'];
        $clinic_id = $request['clinic_id'];
        $general_specialization_id = $request['general_specialization_id'];
        $direct_specialization_id = $request['direct_specialization_id'];
        $insurance_id = $request['insurance_id'];
        $email = $request['email'];
        $website = $request['website'];
        $fees = $request['fees'];
        $wait = $request['wait'];
        $duration_id = $request['duration_id'];
        $country_id = $request['country_id'];
        $city_id = $request['city_id'];
        $area_id = $request['area_id'];
        $lat = $request['lat'];
        $long = $request['long'];
        $location = $request['location'];
        $password = $request['password'];
        $descriptionAR = $request['descriptionAR'];
        $descriptionEN = $request['descriptionEN'];
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

        $user = new User();
        $user->image_id = $image->id;
        $user->phone = $phone;
        $user->email = $email;
        $user->country_id = $country_id;
        $user->city_id = $city_id;
        $user->area_id = $area_id;
        $user->location = $location;
        $user->password = Hash::make($password);
        $user->role = 1;
        $user->auth = Str::random(32);
        $user->save();


        $doctor = new Doctor();
        $doctor->user_id = $user->id;
        $doctor->nameAR = $nameAR;
        $doctor->nameEN = $nameEN;
        $doctor->servicesAR = $servicesAR;
        $doctor->servicesEN = $servicesEN;
        $doctor->titleAR = $titleAR;
        $doctor->titleEN = $titleEN;
        $doctor->clinic_id = $clinic_id;
        $doctor->general_specialization_id = $general_specialization_id;
        $doctor->direct_specialization_id = $direct_specialization_id;
        $doctor->insurance_id = $insurance_id;
        $doctor->website = $website;
        $doctor->fees = $fees;
        $doctor->wait = $wait;
        $doctor->duration_id = $duration_id;
        $doctor->lat = $lat;
        $doctor->long = $long;
        $doctor->descriptionAR = $descriptionAR;
        $doctor->descriptionEN = $descriptionEN;
        $doctor->save();

        return response()->json(['success' => 'created'], 200);
    }

    public function show(){
        $doctors = Doctor::with(['image', 'user'])->get();
        return view('dashboard.doctors.doctors', compact('doctors'));
    }

    public function edit($id){
        $doctor = Doctor::findOrFail($id)->with(['image', 'user'])->get();
        $clinics = Clinic::all();
        $direct = Specialization::all()->where('type', 'direct');
        $general = Specialization::all()->where('type', 'general');
        $insurances = Insurance::all();
        $countries = Country::all();
        $durations = Duration::all();
        $cities = City::all()->where('country_id', $doctor[0]->user->country_id);
        $areas = Area::all()->where('city_id', $doctor[0]->user->city_id);
        return view('dashboard.doctors.editDoctor', compact(['doctor', 'clinics', 'direct', 'general', 'insurances', 'countries', 'cities', 'areas', 'durations']));
    }

    public function update(Request $request){
        $doctor_id = $request['doctor_id'];
        $nameAR = $request['nameAR'];
        $nameEN = $request['nameEN'];
        $servicesAR = $request['servicesAR'];
        $servicesEN = $request['servicesEN'];
        $titleAR = $request['titleAR'];
        $titleEN = $request['titleEN'];
        $phone = $request['phone'];
        $clinic_id = $request['clinic_id'];
        $general_specialization_id = $request['general_specialization_id'];
        $direct_specialization_id = $request['direct_specialization_id'];
        $insurance_id = $request['insurance_id'];
        $email = $request['email'];
        $website = $request['website'];
        $fees = $request['fees'];
        $wait = $request['wait'];
        $duration_id = $request['duration_id'];
        $country_id = $request['country_id'];
        $city_id = $request['city_id'];
        $area_id = $request['area_id'];
        $lat = $request['lat'];
        $long = $request['long'];
        $location = $request['location'];
        $password = $request['password'];
        $descriptionAR = $request['descriptionAR'];
        $descriptionEN = $request['descriptionEN'];


        $doctorInfo = Doctor::findOrFail($doctor_id)->with(['image', 'user'])->get();
        $user_id = $doctorInfo[0]->user->id;
        $image_id = $doctorInfo[0]->image->id;

        $user = User::findOrFail($user_id);
        $user->phone = $phone;
        $user->email = $email;
        $user->country_id = $country_id;
        $user->city_id = $city_id;
        $user->area_id = $area_id;
        $user->location = $location;
        if(isset($request['password'])){
            $user->password = Hash::make($password);
        }
        $user->save();


        $doctor = Doctor::findOrFail($doctor_id);
        $doctor->nameAR = $nameAR;
        $doctor->nameEN = $nameEN;
        $doctor->servicesAR = $servicesAR;
        $doctor->servicesEN = $servicesEN;
        $doctor->titleAR = $titleAR;
        $doctor->titleEN = $titleEN;
        $doctor->clinic_id = $clinic_id;
        $doctor->general_specialization_id = $general_specialization_id;
        $doctor->direct_specialization_id = $direct_specialization_id;
        $doctor->insurance_id = $insurance_id;
        $doctor->website = $website;
        $doctor->fees = $fees;
        $doctor->wait = $wait;
        $doctor->duration_id = $duration_id;
        $doctor->lat = $lat;
        $doctor->long = $long;
        $doctor->descriptionAR = $descriptionAR;
        $doctor->descriptionEN = $descriptionEN;
        $doctor->save();



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

        return response()->json(['success' => 'updated'], 200);
    }

    public function delete(Request $request){
        $id = $request['id'];
        $doctorInfo = Doctor::findOrFail($id)->with(['image', 'user'])->get();

        $doctor = Doctor::findOrFail($id);
        $user = User::findOrFail($doctorInfo[0]->user->id);
        $image = Image::findOrFail($doctorInfo[0]->image->id);
        $image_name = $doctorInfo[0]->image->name;

        if(\File::exists(public_path("/uploads/images/".$image_name))) {
            \File::delete(public_path("/uploads/images/".$image_name));
        }

        $doctor->forceDelete();
        $user->forceDelete();
        $image->forceDelete();

        return response()->json(['success' => 'deleted'], 200);
    }

    public function changePassword(Request $request){
        $user_id = $_COOKIE['idu'];
        $password = $request['password'];

        $user = User::findOrFail($user_id);
        $user->password = Hash::make($password);
        $user->save();

        return response()->json(['success' => 'changed'], 200);
    }

    public function editDoctorProfile($id){
        $doctor = User::findOrFail($id);
        $doctor_info = User::findOrFail($id)->doctor;
        $doctor_image = User::findOrFail($id)->image;
        $clinics = Clinic::all();
        $direct = Specialization::all()->where('type', 'direct');
        $general = Specialization::all()->where('type', 'general');
        $insurances = Insurance::all();
        $countries = Country::all();
        $durations = Duration::all();
        $cities = City::all()->where('country_id', $doctor->country_id);
        $areas = Area::all()->where('city_id', $doctor->city_id);

        return view('doctors.updateProfile',
            compact([
                'doctor',
                'doctor_info',
                'doctor_image',
                'clinics',
                'direct',
                'general',
                'insurances',
                'countries',
                'durations',
                'cities',
                'areas'
            ])
        );
    }
}
