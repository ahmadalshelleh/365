<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use Illuminate\Http\Request;

class DrugController extends Controller
{
    public function create(Request $request){
        $name = $request['name'];
        $code = $request['code'];
        $unit = $request['unit'];
        $group = $request['group'];
        $barcode = $request['barcode'];
        $sale_tax = $request['sale_tax'];
        $purchase_tax = $request['purchase_tax'];
        $sale_tax_free = $request['sale_tax_free'];
        $purchase_tax_free = $request['purchase_tax_free'];
        $price_symbol = $request['price_symbol'];
        $price = $request['price'];

        $drug = new Drug();
        $drug->name = $name;
        $drug->code = $code;
        $drug->unit = $unit;
        $drug->group = $group;
        $drug->barcode = $barcode;
        $drug->sale_tax = $sale_tax;
        $drug->purchase_tax = $purchase_tax;
        $drug->sale_tax_free = $sale_tax_free;
        $drug->purchase_tax_free = $purchase_tax_free;
        $drug->price_symbol = $price_symbol;
        $drug->price = $price;
        $drug->save();

        return response()->json(['success'=>'created'], 200);


    }

    public function show(){
        $drugs = Drug::all();
        return view('dashboard.drug.drug', compact('drugs'));
    }

    public function edit($id){
        $drug = Drug::findOrFail($id);
        return view('dashboard.drug.editDrug', compact('drug'));
    }

    public function update(Request $request){
        $drug_id = $request['drug_id'];
        $name = $request['name'];
        $code = $request['code'];
        $unit = $request['unit'];
        $group = $request['group'];
        $barcode = $request['barcode'];
        $sale_tax = $request['sale_tax'];
        $purchase_tax = $request['purchase_tax'];
        $sale_tax_free = $request['sale_tax_free'];
        $purchase_tax_free = $request['purchase_tax_free'];
        $price_symbol = $request['price_symbol'];
        $price = $request['price'];

        $drug = Drug::findOrFail($drug_id);
        $drug->name = $name;
        $drug->code = $code;
        $drug->unit = $unit;
        $drug->group = $group;
        $drug->barcode = $barcode;
        $drug->sale_tax = $sale_tax;
        $drug->purchase_tax = $purchase_tax;
        $drug->sale_tax_free = $sale_tax_free;
        $drug->purchase_tax_free = $purchase_tax_free;
        $drug->price_symbol = $price_symbol;
        $drug->price = $price;
        $drug->save();

        return response()->json(['success'=>'updated'], 200);


    }

    public function delete(Request $request){
        $id = $request['id'];
        $drug = Drug::findOrFail($id);
        $drug->forceDelete();

        return response()->json(['success' => 'deleted'], 200);
    }
}
