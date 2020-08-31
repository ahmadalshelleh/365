@extends('layouts.dashboardApp')

@section('title', 'Add Country')

@section('header')
<script src="/js/dashboard/country.js"></script>
@endsection



@section('content')
    <div class="main-div-content">
        <div class="row">
            <div class="col-md-6 main-div-content-left">Add country</div>
            <div class="col-md-6 main-div-content-right"><a href="/admin/dashboard">Dashboard</a> / Add country</div>
        </div>
    </div>
    <br />
    <div class="body-pages">
        <form id="create_country_form">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Name (AR)</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="country_nameAR" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Name (EN)</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="country_nameEN" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">ISO</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="country_iso">
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary float-right" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection