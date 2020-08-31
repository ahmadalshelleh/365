<?php

namespace App\Http\Controllers;

use App\Models\Duration;
use Illuminate\Http\Request;

class DurationController extends Controller
{
    public function show(){
        $durations = Duration::all();
        return view('dashboard.duration.duration', compact('durations'));
    }

    public function create(Request $request){
        $duration = new Duration();
        $duration->name = $request->name;
        $duration->save();

        return response()->json(['success', 'created'], 200);
    }

    public function edit($id){
        $duration = Duration::findOrFail($id);
        return view('dashboard.duration.editDuration', compact('duration'));
    }

    public function update(Request $request){
        $id = $request['id'];
        $name = $request['name'];

        $duration = Duration::findOrFail($id);
        $duration->name = $name;
        $duration->save();

        return response()->json(['success', 'updated'], 200);
    }

    public function delete(Request $request){
        $id = $request['id'];

        $duration = Duration::findOrFail($id);
        $duration->forceDelete();

        return response()->json(['success' => 'deleted'], 200);
    }
}
