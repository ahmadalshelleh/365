<?php

namespace App\Http\Controllers;

use App\Models\Specialization;
use Illuminate\Http\Request;

class SpecializationController extends Controller
{
    public function addPage(){
        return view('dashboard.specialization.addSpecialization');
    }

    public function create(Request $request){
        $name = $request['name'];
        $type = $request['type'];
        $description = $request['description'];

        $specialization = new Specialization();
        $specialization->name = $name;
        $specialization->type = $type;
        $specialization->description = $description;
        $specialization->save();

        return response()->json(['success' => 'created'], 200);
    }

    public function show(){
        $specializations = Specialization::all();
        return view('dashboard.specialization.specialization', compact('specializations'));
    }

    public function edit($id){
        $specialization = Specialization::findOrFail($id);
        return view('dashboard.specialization.editSpecialization', compact('specialization'));
    }

    public function update(Request $request){
        $specialization_id = $request['specialization_id'];
        $name = $request['name'];
        $type = $request['type'];
        $description = $request['description'];

        $specialization = Specialization::findOrFail($specialization_id);
        $specialization->name = $name;
        $specialization->type = $type;
        $specialization->description = $description;
        $specialization->save();

        return response()->json(['success' => 'updated'], 200);
    }

    public function delete(Request $request){
        $id = $request['id'];
        $specialization = Specialization::findOrFail($id);
        $specialization->forceDelete();

        return response()->json(['success' => 'deleted'], 200);
    }
}
