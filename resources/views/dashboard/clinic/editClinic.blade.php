@extends('layouts.dashboardApp')

@section('title', 'Edit Clinic')

@section('header')
    <script src="/js/dashboard/clinic.js"></script>
@endsection

@section('content')
    <div class="main-div-content">
        <div class="row">
            <div class="col-md-6 main-div-content-left">Edit clinic</div>
            <div class="col-md-6 main-div-content-right"><a href="/admin/dashboard">Dashboard</a> / Edit clinic</div>
        </div>
    </div>
    <br />
    <div class="body-pages">
        <form id="edit_clinic_form">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Name (AR)</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" value="{{$clinic->nameAR}}" id="clinic_nameAR">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Name (EN)</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" value="{{$clinic->nameEN}}" id="clinic_nameEN">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Email</label></div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" value="{{$clinic->email}}" id="clinic_email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Phone</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" value="{{$clinic->phone}}" id="clinic_phone">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Active</label></div>
                            <div class="col-md-6">
                                @if($clinic->active === '1')
                                    <input type="checkbox" checked id="clinic_active">
                                @else
                                    <input type="checkbox" id="clinic_active">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Country</label></div>
                            <div class="col-md-6">
                                <select required="" class="form-control chained valid" id="clinic_countries">
                                    @foreach($countries as $country)
                                        @if("$country->id" === "$clinic->country_id")
                                            <option value="{{$country->id}}" selected>{{$country->nameAR}}</option>
                                        @else
                                            <option value="{{$country->id}}">{{$country->nameAR}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">City</label></div>
                            <div class="col-md-6">
                                <select required="" class="form-control chained valid" id="clinic_cities">
                                    @foreach($cities as $city)
                                        @if("$city->id" === "$clinic->city_id")
                                            <option value="{{$city->id}}" selected>{{$city->nameAR}}</option>
                                        @else
                                            <option value="{{$city->id}}">{{$city->nameAR}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Area</label></div>
                            <div class="col-md-6">
                                <select required="" class="form-control chained valid" id="clinic_areas">
                                    @foreach($areas as $area)
                                        @if("$area->id" === "$clinic->area_id")
                                            <option value="{{$area->id}}" selected>{{$area->nameAR}}</option>
                                        @else
                                            <option value="{{$area->id}}">{{$area->nameAR}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-6" id="div-map">
                                <iframe
                                        src="https://maps.google.com/maps?q={{$clinic->lat}}, {{$clinic->long}}&hl=es&z=14&amp;output=embed"
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
                                        <label for="name">Lat:</label><input type="text" class="form-control" id="lat" value="{{$clinic->lat}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name">Long:</label><input type="text" class="form-control" id="long" value="{{$clinic->long}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Location</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" value="{{$clinic->location}}" id="clinic_location">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Insurance</label></div>
                            <div class="col-md-6">
                                <select required="" class="form-control" id="clinic_insurance">
                                    @foreach($insurances as $insurance)
                                        @if("$insurance->id" === "$clinic->insurance_id")
                                            <option value="{{$insurance->id}}" selected>{{$insurance->nameAR}}</option>
                                        @else
                                            <option value="{{$insurance->id}}">{{$insurance->nameAR}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" value="{{$clinic->id}}" id="clinic_id" />
                    <button class="btn btn-primary float-right">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection