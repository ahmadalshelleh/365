@extends('layouts.dashboardApp')

@section('title', 'Edit Drug')

@section('header')
    <script src="/js/dashboard/drug.js"></script>
@endsection

@section('content')
    <div class="main-div-content">
        <div class="row">
            <div class="col-md-6 main-div-content-left">Edit drug</div>
            <div class="col-md-6 main-div-content-right"><a href="/admin/dashboard">Dashboard</a> / Edit drug</div>
        </div>
    </div>
    <br />
    <div class="body-pages">
        <form id="edit_drug_form">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Name</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" value="{{$drug->name}}" id="drug_edit_name" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Code</label></div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" value="{{$drug->code}}" id="drug_edit_code" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Unit</label></div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" value="{{$drug->unit}}" id="drug_edit_unit" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Group</label></div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" value="{{$drug->group}}" id="drug_edit_group" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Barcode</label></div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" value="{{$drug->barcode}}" id="drug_edit_barcode" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Sale Tax</label></div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" value="{{$drug->sale_tax}}" id="drug_edit_sale_tax" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Purchase Type</label></div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" value="{{$drug->purchase_tax}}" id="drug_edit_purchase_tax" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Sale Tax Free</label></div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" value="{{$drug->sale_tax_free}}" id="drug_edit_sale_tax_free" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Purchase tax free</label></div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" value="{{$drug->purchase_tax_free}}" id="drug_edit_purchase_tax_free" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Price Symbol</label></div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" value="{{$drug->price_symbol}}" id="drug_edit_price_symbol" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Price</label></div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" value="{{$drug->price}}" id="drug_edit_price" required>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" value="{{$drug->id}}" id="drug_id" />
                    <button class="btn btn-primary float-right">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection