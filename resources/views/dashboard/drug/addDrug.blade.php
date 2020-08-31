@extends('layouts.dashboardApp')

@section('title', 'Add Drug')

@section('header')
    <script src="/js/dashboard/drug.js"></script>
@endsection

@section('content')
    <div class="main-div-content">
        <div class="row">
            <div class="col-md-6 main-div-content-left">Add drug</div>
            <div class="col-md-6 main-div-content-right"><a href="/admin/dashboard">Dashboard</a> / Add drug</div>
        </div>
    </div>
    <br />
    <div class="body-pages">
        <form id="create_drug_form">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Name</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="drug_name" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Code</label></div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" id="drug_code" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Unit</label></div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" id="drug_unit" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Group</label></div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" id="drug_group" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Barcode</label></div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" id="drug_barcode" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Sale Tax</label></div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" id="drug_sale_tax" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Purchase Type</label></div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" id="drug_purchase_tax" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Sale Tax Free</label></div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" id="drug_sale_tax_free" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Purchase tax free</label></div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" id="drug_purchase_tax_free" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Price Symbol</label></div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" id="drug_price_symbol" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Price</label></div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" id="drug_price" required>
                            </div>
                        </div>
                    </div>


                    <button class="btn btn-primary float-right">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection