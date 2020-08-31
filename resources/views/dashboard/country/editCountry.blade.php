@extends('layouts.dashboardApp')

@section('title', 'Edit Country')

@section('header')
    <script src="/js/dashboard/country.js"></script>
@endsection

@section('content')
    <div class="main-div-content">
        <div class="row">
            <div class="col-md-6 main-div-content-left">Edit country</div>
            <div class="col-md-6 main-div-content-right"><a href="/admin/dashboard">Dashboard</a> / Edit country</div>
        </div>
    </div>
    <br />
    <div class="body-pages">
        <form id="edit_country_form">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Name (AR)</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="edit_country_nameAR" value="{{$country->nameAR}}" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Name (EN)</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="edit_country_nameEN" value="{{$country->nameEN}}" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">ISO</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="edit_country_iso" value="{{$country->iso}}">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" value="{{$country->id}}" id="edit_country_id" />
                    <button class="btn btn-primary float-right">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection