@extends('layouts.dashboardApp')

@section('title', 'Add Clinic')

@section('header')
    <script src="/js/dashboard/clinic.js"></script>
@endsection

@section('content')
    <div class="main-div-content">
        <div class="row">
            <div class="col-md-6 main-div-content-left">Add clinic</div>
            <div class="col-md-6 main-div-content-right"><a href="/admin/dashboard">Dashboard</a> / Add clinic</div>
        </div>
    </div>
    <br />
    <div class="body-pages">
        <form id="create_clinic_form">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Name (AR)</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="clinic_nameAR" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Name (EN)</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="clinic_nameEN" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Email</label></div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" id="clinic_email" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Phone</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="clinic_phone" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Active</label></div>
                            <div class="col-md-6">
                                <input type="checkbox" id="clinic_active">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Country</label></div>
                            <div class="col-md-6">
                                <select class="form-control chained valid" id="clinic_countries" required>
                                    <option selected disabled>Please select country</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}">{{$country->nameAR}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">City</label></div>
                            <div class="col-md-6">
                                <select class="form-control chained valid" id="clinic_cities" disabled required>
                                    <option selected disabled>Please select city</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Area</label></div>
                            <div class="col-md-6">
                                <select class="form-control chained valid" id="clinic_areas" disabled required>
                                    <option selected disabled>Please select area</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-6" id="div-map">
                                <iframe
                                        src="https://maps.google.com/maps?q=32.004233,35.9351532&hl=es&z=14&amp;output=embed"
                                        width="100%"
                                        height="450"
                                        frameborder="0"
                                        style="border:0;"
                                        allowfullscreen=""
                                        aria-hidden="false"
                                        tabindex="0"
                                        id="map"
                                ></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="name">Lat:</label><input type="text" class="form-control" id="lat">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name">Long:</label><input type="text" class="form-control" id="long">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Location</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="clinic_location" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Insurance</label></div>
                            <div class="col-md-6">
                                <select required="" class="form-control" id="clinic_insurance" required>
                                    <option selected disabled>Please select insurance</option>
                                    @foreach($insurances as $insurance)
                                        <option value="{{$insurance->id}}">{{$insurance->nameAR}}</option>
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