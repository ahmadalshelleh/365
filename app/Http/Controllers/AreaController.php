<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function addPage(){
        $cities = City::all();
        return view('dashboard.area.addArea', compact('cities'));
    }

    public function create(Request $request){
        $area = new Area();
        $area->nameEN = $request['nameEN'];
        $area->nameAR = $request['nameAR'];
        $area->city_id = $request['city_id'];
        $area->save();

        return response()->json(['success' => 'created'], 200);
    }

    public function show(){
        $areas = Area::all();
        return view('dashboard.area.area', compact('areas'));
    }

    public function edit($id){
        $city = Area::findOrFail($id)->city;
        $area = Area::findOrFail($id);
        $cities = City::all();
        return view('dashboard.area.editArea', compact(['city', 'area', 'cities']));
    }

    public function update(Request $request){
        $id = $request['id'];
        $nameAR = $request['nameAR'];
        $nameEN = $request['nameEN'];
        $city_id = $request['city_id'];

        $area = Area::findOrFail($id);
        $area->nameAR = $nameAR;
        $area->nameEN = $nameEN;
        $area->city_id = $city_id;
        $area->save();

        return response()->json(['success' => 'updated'], 200);
    }

    public function delete(Request $request){
        $id = $request['id'];
        $area = Area::findOrFail($id);
        $area->forceDelete();

        return response()->json(['success' => 'deleted'], 200);
    }
}
