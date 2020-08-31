@extends('layouts.dashboardApp')

@section('title', 'Edit Pharmacy')

@section('header')
    <script src="/js/dashboard/pharmacy.js"></script>
@endsection

@section('content')
    <div class="main-div-content">
        <div class="row">
            <div class="col-md-6 main-div-content-left">Edit pharmacy</div>
            <div class="col-md-6 main-div-content-right"><a href="/admin/dashboard">Dashboard</a> / Edit pharmacy</div>
        </div>
    </div>
    <br />
    <div class="body-pages">
        <form id="edit_pharmacy_form">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Name (AR)</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="nameAR" required value="{{$pharmacy->nameAR}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Name (EN)</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="nameEN" required value="{{$pharmacy->nameEN}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Active</label></div>
                            <div class="col-md-6">
                                @if($pharmacy->active === '1')
                                    <input type="checkbox" checked id="active">
                                @else
                                    <input type="checkbox" id="active">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Owner Name (Arabic)</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="ownerAR" required value="{{$pharmacy->ownerAR}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Owner Name (English)</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="ownerEN" required value="{{$pharmacy->ownerEN}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Email</label></div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" id="email" required value="{{$pharmacy->email}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Phone</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="phone" required value="{{$pharmacy->phone}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Mobile</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="mobile" required value="{{$pharmacy->mobile}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Insurance</label></div>
                            <div class="col-md-6">
                                <select required="" class="form-control" id="pharmacy_insurance">
                                    @foreach($insurances as $insurance)
                                        @if("$insurance->id" === "$pharmacy->insurance_id")
                                            <option value="{{$insurance->id}}" selected>{{$insurance->nameAR}}</option>
                                        @else
                                            <option value="{{$insurance->id}}">{{$insurance->nameAR}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Country</label></div>
                            <div class="col-md-6">
                                <select required="" class="form-control chained valid" id="pharmacy_countries">
                                    @foreach($countries as $country)
                                        @if("$country->id" === "$pharmacy->country_id")
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
                                <select required="" class="form-control chained valid" id="pharmacy_cities">
                                    @foreach($cities as $city)
                                        @if("$city->id" === "$pharmacy->city_id")
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
                                <select required="" class="form-control chained valid" id="pharmacy_areas">
                                    @foreach($areas as $area)
                                        @if("$area->id" === "$pharmacy->area_id")
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
                                        src="https://maps.google.com/maps?q={{$pharmacy->lat}}, {{$pharmacy->long}}&hl=es&z=14&amp;output=embed"
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
                                        <label for="name">Lat:</label><input type="text" class="form-control" id="lat" value="{{$pharmacy->lat}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name">Long:</label><input type="text" class="form-control" id="long" value="{{$pharmacy->long}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Location</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="location" required value="{{$pharmacy->location}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Commercial Register</label></div>
                            <div class="col-md-6">
                                <input type="file" id="commercial_register" accept="image/*">
                                <br /><br />
                                <img src="/uploads/images/{{$image->name}}" width="200" />
                            </div>
                        </div>
                    </div>

                    <input type="hidden" value="{{$pharmacy->id}}" id="pharmacy_id" />
                    <button class="btn btn-primary float-right">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection