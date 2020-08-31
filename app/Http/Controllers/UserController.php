<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserController extends Controller
{
    //

    public function login(Request $request){
        $email = $request['email'];
        $password = $request['password'];

        $user = User::where('email', $email)->first();
        if($user == null) {
            return response()->json(['failed' => 'User Not Found'], 401);
        }

        if(Hash::check($password, $user->password)){
            $image = User::findOrFail($user->id)->image;
            if($user->role === 1){
                $doctor = User::findOrFail($user->id)->doctor;
                setcookie('name', $doctor->nameAR, time() + (86400 * 30), "/");
            }else{
                setcookie('name', $user->name, time() + (86400 * 30), "/");
            }
            setcookie('idu', $user->id, time() + (86400 * 30), "/");
            setcookie('auth', $user->auth, time() + (86400 * 30), "/");
            setcookie('image', $image->name, time() + (86400 * 30), "/");

            return response()->json($user, 200);
        }

        return response()->json(['failed' => 'Wrong Password'], 401);
    }

    public function logout(){
        setcookie('idu', null, -1, '/');
        setcookie('auth', null, -1, '/');
        setcookie('name', null, -1, '/');
        setcookie('image', null, -1, '/');
    }

    public function addPage(){
        return view('dashboard.users.addUser');
    }

    public function create(Request $request){
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
        $user->name = $request['name'];
        $user->phone = $request['phone'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->group = $request['group'];
        $user->active = $request['active'];
        $user->auth = Str::random(32);
        $user->role = 0;
        $user->save();

        return response()->json(['success' => 'created'], 200);
    }

    public function show(){
        $users = User::where('role', 0)->with('image')->get();
        return view('dashboard.users.users', compact('users'));
    }

    public function edit($id){
        $user = User::findOrFail($id);
        $image = User::findOrFail($id)->image;
        return view('dashboard.users.editUser', compact(['user', 'image']));
    }

    public function update(Request $request){
//        $image = $request['image'];
//
//        $folderPath = "/images/";
//
//        $image_parts = explode(";base64,", $image);
//        $image_type_aux = explode("image/", $image_parts[0]);
//        $image_type = $image_type_aux[1];
//        $image_base64 = base64_decode($image_parts[1]);
//        $image_name = uniqid() . '.'.$image_type;
//        $file = $folderPath . $image_name;
//
//        Storage::disk('public')->put($file, $image_base64);
//
//        $image = new Image();
//        $image->name = $image_name;
//        $image->save();

        $user = User::findOrFail($request['user_id']);
        $user->name = $request['name'];
        $user->phone = $request['phone'];
        $user->email = $request['email'];
        if(isset($request['password'])){
            $user->password = Hash::make($request['password']);
        }
        $user->group = $request['group'];
        $user->active = $request['active'];
        $user->save();
        $image_id = $user->image_id;
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


        return response()->json(['success' => 'created'], 200);
    }

    public function delete(Request $request){
        $id = $request['id'];
        $image = User::findOrFail($id)->image;
        $user = User::findOrFail($id);
        $user->forceDelete();
        $image->forceDelete();
        return response()->json(['success' => 'deleted'], 200);
    }
}
