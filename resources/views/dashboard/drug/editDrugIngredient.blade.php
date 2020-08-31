@extends('layouts.dashboardApp')

@section('title', 'Edit Drug Ingredient')

@section('header')
    <script src="/js/dashboard/drugIngredient.js"></script>
@endsection

@section('content')
    <div class="main-div-content">
        <div class="row">
            <div class="col-md-6 main-div-content-left">Edit drug ingredient</div>
            <div class="col-md-6 main-div-content-right"><a href="/admin/dashboard">Dashboard</a> / Edit drug ingredient</div>
        </div>
    </div>
    <br />
    <div class="body-pages">
        <form id="edit_drug_ingredient_form">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">INGREDIENT</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" required id="ingredient" value="{{$drugIngredient->ingredient}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Name</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" required id="name" value="{{$drugIngredient->name}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Supply</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" required id="supply" value="{{$drugIngredient->supply}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">DosageForm</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" required id="dosageform" value="{{$drugIngredient->dosageForm}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Concentration</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" required id="concentration" value="{{$drugIngredient->Concentration}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">DrugStore</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" required id="drugstore" value="{{$drugIngredient->drugStore}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">ATCCODE</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" required id="atccode" value="{{$drugIngredient->atcCode}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Company</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" required id="company" value="{{$drugIngredient->company}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Country</label></div>
                            <div class="col-md-6">
                                <select required class="form-control chained valid" id="country_id">
                                    @foreach($countries as $country)
                                        @if("$country->id" === "$drugIngredient->country_id")
                                            <option value="{{$country->id}}" selected>{{$country->nameAR}}</option>
                                        @else
                                            <option value="{{$country->id}}">{{$country->nameAR}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>


                    <input type="hidden" id="drug_ingredient_id" value="{{$drugIngredient->id}}" />
                    <button class="btn btn-primary float-right">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection