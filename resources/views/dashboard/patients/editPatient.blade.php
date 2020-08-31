@extends('layouts.dashboardApp')

@section('title', 'Edit Patient')

@section('header')
    <script src="/js/dashboard/patient.js"></script>
@endsection

@section('content')
    <div class="main-div-content">
        <div class="row">
            <div class="col-md-6 main-div-content-left">Edit patient</div>
            <div class="col-md-6 main-div-content-right"><a href="/admin/dashboard">Dashboard</a> / Edit patient</div>
        </div>
    </div>
    <br />
    <div class="body-pages">
        <form id="edit_patient_form">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="nameAR">Name (AR)</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="nameAR" value="{{$patient[0]->nameAR}}" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="nameEN">Name (EN)</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="nameEN" value="{{$patient[0]->nameEN}}" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="date">Date</label></div>
                            <div class="col-md-6">
                                <input type="date" class="form-control" id="date" value="{{$patient[0]->date}}" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="email">Email</label></div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" id="email" value="{{$patient[0]->user->email}}" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Password</label></div>
                            <div class="col-md-6">
                                <input type="password" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Insurance</label></div>
                            <div class="col-md-6">
                                <select class="form-control" id="insurance" required>
                                    @foreach($insurances as $insurance)
                                        @if($insurance->id === $patient[0]->insurance_id)
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
                            <div class="col-md-2"><label for="image">image</label></div>
                            <div class="col-md-6">
                                <input type="file" id="image">
                                <br /><br />
                                <img src="/uploads/images/{{$patient[0]->image->name}}" width="200" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="status">Status</label></div>
                            <div class="col-md-6">
                                <select id="status" class="form-control" required>
                                    <option value="single" @if($patient[0]->status === 'single') selected @endif>single</option>
                                    <option value="married" @if($patient[0]->status === 'married') selected @endif>Married</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="gender">Gender</label></div>
                            <div class="col-md-6">
                                <select id="gender" class="form-control" required>
                                    <option value="male" @if($patient[0]->gender === 'male') selected @endif>Male</option>
                                    <option value="female" @if($patient[0]->gender === 'female') selected @endif>Female</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="blood">Blood Type</label></div>
                            <div class="col-md-6">
                                <select class="form-control" id="blood">
                                    <option @if($patient[0]->blood === 'A+') selected @endif>A+</option>
                                    <option @if($patient[0]->blood === 'A') selected @endif>A-</option>
                                    <option @if($patient[0]->blood === 'A Unknown') selected @endif>A Unknown</option>
                                    <option @if($patient[0]->blood === 'B+') selected @endif>B+</option>
                                    <option @if($patient[0]->blood === 'B-') selected @endif>B-</option>
                                    <option @if($patient[0]->blood === 'B Unknown') selected @endif>B Unknown</option>
                                    <option @if($patient[0]->blood === 'AB+') selected @endif>AB+</option>
                                    <option @if($patient[0]->blood === 'AB-') selected @endif>AB-</option>
                                    <option @if($patient[0]->blood === 'AB Unknown') selected @endif>AB Unknown</option>
                                    <option @if($patient[0]->blood === 'O+') selected @endif>O+</option>
                                    <option @if($patient[0]->blood === 'O-') selected @endif>O-</option>
                                    <option @if($patient[0]->blood === 'O Unknown') selected @endif>O Unknown</option>
                                    <option @if($patient[0]->blood === 'Unknown') selected @endif>Unknown</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <label>
                                    <input type="checkbox" id="made_surgery" @if($patient[0]->made_surgery === 1) checked @endif/>
                                </label> Did you made surgery
                            </div>
                            <div class="col-sm-6">
                                <label>
                                    <input type="checkbox" id="diabetes" @if($patient[0]->diabetes === 1) checked @endif/>
                                </label> Have Diabetes
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>
                                    <input type="checkbox" id="hypertension" @if($patient[0]->hypertension === 1) checked @endif/>
                                </label> Have Hypertension
                            </div>
                            <div class="col-sm-6">
                                <label>
                                    <input type="checkbox" id="disability" @if($patient[0]->disability === 1) checked @endif/>
                                </label> Have Disability
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>
                                    <input type="checkbox" id="health_problem" @if($patient[0]->health_problem === 1) checked @endif/>
                                </label> Any health problem
                            </div>
                            <div class="col-sm-6">
                                <label>
                                    <input type="checkbox" id="allergy_for_drug" @if($patient[0]->allergy_for_drug === 1) checked @endif/>
                                </label> Any allergy for drug
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Country</label></div>
                            <div class="col-md-6">
                                <select class="form-control chained valid" id="countries">
                                    @foreach($countries as $country)
                                        @if($country->id === $patient[0]->user->country_id)
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
                                <select class="form-control chained valid" id="cities" required>
                                    @foreach($cities as $city)
                                        @if($city->id === $patient[0]->user->city_id)
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
                                <select class="form-control chained valid" id="areas" required>
                                    @foreach($areas as $area)
                                        @if("$area->id" === $patient[0]->user->area_id)
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
                                        src="https://maps.google.com/maps?q={{$patient[0]->lat}}, {{$patient[0]->long}}&hl=es&z=14&amp;output=embed"
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
                                        <label for="name">Lat:</label><input type="text" class="form-control" id="lat" value="{{$patient[0]->lat}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name">Long:</label><input type="text" class="form-control" id="long" value="{{$patient[0]->long}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="location">Location</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="location" value="{{$patient[0]->user->location}}" required>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" id="patient_id" value="{{$patient[0]->id}}">
                    <button class="btn btn-primary float-right">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection