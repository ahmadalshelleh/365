<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\DrugIngredient;
use Illuminate\Http\Request;

class DrugIngredientController extends Controller
{
    public function addPage(){
        $countries = Country::all();
        return view('dashboard.drug.addDrugIngredient', compact('countries'));
    }
    public function create(Request $request){
        $ingredient = $request['ingredient'];
        $name = $request['name'];
        $supply = $request['supply'];
        $dosageform = $request['dosageform'];
        $concentration = $request['concentration'];
        $drugstore = $request['drugstore'];
        $atccode = $request['atccode'];
        $company = $request['company'];
        $country_id = $request['country_id'];

        $drugIngredient = new DrugIngredient();

        $drugIngredient->ingredient = $ingredient;
        $drugIngredient->name = $name;
        $drugIngredient->supply = $supply;
        $drugIngredient->dosageform = $dosageform;
        $drugIngredient->concentration = $concentration;
        $drugIngredient->drugstore = $drugstore;
        $drugIngredient->atccode = $atccode;
        $drugIngredient->company = $company;
        $drugIngredient->country_id = $country_id;
        $drugIngredient->save();

        return response()->json(['success'=>'created'], 200);


    }

    public function show(){
        $drugsIngredient = DrugIngredient::all();
        return view('dashboard.drug.drugIngredient', compact('drugsIngredient'));
    }

    public function edit($id){
        $countries = Country::all();
        $drugIngredient = DrugIngredient::findOrFail($id);
        return view('dashboard.drug.editDrugIngredient', compact(['drugIngredient', 'countries']));
    }

    public function update(Request $request){
        $drugIngredient_id = $request['drug_ingredient_id'];
        $ingredient = $request['ingredient'];
        $name = $request['name'];
        $supply = $request['supply'];
        $dosageform = $request['dosageform'];
        $concentration = $request['concentration'];
        $drugstore = $request['drugstore'];
        $atccode = $request['atccode'];
        $company = $request['company'];
        $country_id = $request['country_id'];

        $drugIngredient = DrugIngredient::findOrFail($drugIngredient_id);
        $drugIngredient->ingredient = $ingredient;
        $drugIngredient->name = $name;
        $drugIngredient->supply = $supply;
        $drugIngredient->dosageform = $dosageform;
        $drugIngredient->concentration = $concentration;
        $drugIngredient->drugstore = $drugstore;
        $drugIngredient->atccode = $atccode;
        $drugIngredient->company = $company;
        $drugIngredient->country_id = $country_id;
        $drugIngredient->save();

        return response()->json(['success'=>'updated'], 200);


    }

    public function delete(Request $request){
        $id = $request['id'];
        $drugIngredient = DrugIngredient::findOrFail($id);
        $drugIngredient->forceDelete();

        return response()->json(['success' => 'deleted'], 200);
    }
}
