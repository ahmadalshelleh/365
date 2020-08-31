@extends('layouts.dashboardApp')

@section('title', 'Edit Insurance')

@section('header')
    <script src="/js/dashboard/insurance.js"></script>
@endsection

@section('content')
    <div class="main-div-content">
        <div class="row">
            <div class="col-md-6 main-div-content-left">Edit insurance</div>
            <div class="col-md-6 main-div-content-right"><a href="/admin/dashboard">Dashboard</a> / Edit insurance</div>
        </div>
    </div>
    <br />
    <div class="body-pages">
        <form id="edit_insurance_form">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Name (AR)</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" value="{{$insurance->nameAR}}" id="insurance_nameAR">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Name (EN)</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" value="{{$insurance->nameEN}}" id="insurance_nameEN">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Active</label></div>
                            <div class="col-md-6">
                                @if($insurance->active === '1')
                                    <input type="checkbox" checked id="insurance_active">
                                @else
                                    <input type="checkbox" id="insurance_active">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Country</label></div>
                            <div class="col-md-6">
                                <select required="" class="form-control chained valid" id="insurance_countries">
                                    @foreach($countries as $country)
                                        @if("$country->id" === "$insurance->country_id")
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
                                <select required="" class="form-control chained valid" id="insurance_cities">
                                    @foreach($cities as $city)
                                        @if("$city->id" === "$insurance->city_id")
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
                                <select required="" class="form-control chained valid" id="insurance_areas">
                                    @foreach($areas as $area)
                                        @if("$area->id" === "$insurance->area_id")
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
                                        src="https://maps.google.com/maps?q={{$insurance->lat}}, {{$insurance->long}}&hl=es&z=14&amp;output=embed"
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
                                        <label for="name">Lat:</label><input type="text" class="form-control" id="lat" value="{{$insurance->lat}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name">Long:</label><input type="text" class="form-control" id="long" value="{{$insurance->long}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Location</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" value="{{$insurance->location}}" id="insurance_location">
                            </div>
                        </div>
                    </div>

                    <input type="hidden" value="{{$insurance->id}}" id="insurance_id"/>
                    <button class="btn btn-primary float-right">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection