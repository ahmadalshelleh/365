@extends('layouts.dashboardApp')

@section('title', 'Add Drug Ingredient')

@section('header')
    <script src="/js/dashboard/drugIngredient.js"></script>
@endsection

@section('content')
    <div class="main-div-content">
        <div class="row">
            <div class="col-md-6 main-div-content-left">Add drug ingredient</div>
            <div class="col-md-6 main-div-content-right"><a href="/admin/dashboard">Dashboard</a> / Add drug ingredient</div>
        </div>
    </div>
    <br />
    <div class="body-pages">
        <form id="create_drug_ingredient_form">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">INGREDIENT</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="ingredient" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Name</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="name" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Supply</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="supply" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">DosageForm</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="dosageform" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Concentration</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="concentration" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">DrugStore</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="drugstore" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">ATCCODE</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="atccode" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Company</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="company" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Country</label></div>
                            <div class="col-md-6">
                                <select class="form-control chained valid" id="country_id" required>
                                    <option selected disabled>Please select country</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}">{{$country->nameAR}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>



                    <button class="btn btn-primary float-right">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection