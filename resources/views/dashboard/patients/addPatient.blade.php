@extends('layouts.dashboardApp')

@section('title', 'Add Patient')

@section('header')
    <script src="/js/dashboard/patient.js"></script>
@endsection

@section('content')
    <div class="main-div-content">
        <div class="row">
            <div class="col-md-6 main-div-content-left">Add patient</div>
            <div class="col-md-6 main-div-content-right"><a href="/admin/dashboard">Dashboard</a> / Add patient</div>
        </div>
    </div>
    <br />
    <div class="body-pages">
        <form id="create_patient_form">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="nameAR">Name (AR)</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="nameAR" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="nameEN">Name (EN)</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="nameEN" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="date">Date</label></div>
                            <div class="col-md-6">
                                <input type="date" class="form-control" id="date" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="email">Email</label></div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" id="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="password">Password</label></div>
                            <div class="col-md-6">
                                <input type="password" class="form-control" id="password" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="insurance">Insurance</label></div>
                            <div class="col-md-6">
                                <select required="" class="form-control" id="insurance" required>
                                    <option disabled selected>Please select insurance</option>
                                    @foreach($insurances as $insurance)
                                        <option value="{{$insurance->id}}">{{$insurance->nameAR}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="image">image</label></div>
                            <div class="col-md-6">
                                <input type="file" id="image" accept="image/*" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Status</label></div>
                            <div class="col-md-6">
                                <select id="status" required class="form-control">
                                    <option value="single">single</option>
                                    <option value="married">Married</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Gender</label></div>
                            <div class="col-md-6">
                                <select id="gender" required class="form-control">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="blood">Blood Type</label></div>
                            <div class="col-md-6">
                                <select class="form-control" id="blood" required>
                                    <option>A+</option>
                                    <option>A-</option>
                                    <option>A Unknown</option>
                                    <option>B+</option>
                                    <option>B-</option>
                                    <option>B Unknown</option>
                                    <option>AB+</option>
                                    <option>AB-</option>
                                    <option>AB Unknown</option>
                                    <option>O+</option>
                                    <option>O-</option>
                                    <option>O Unknown</option>
                                    <option>Unknown</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <label>
                                    <input type="checkbox" id="made_surgery"/>
                                </label> Did you made surgery
                            </div>
                            <div class="col-sm-6">
                                <label>
                                    <input type="checkbox" id="diabetes"/>
                                </label> Have Diabetes
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>
                                    <input type="checkbox" id="hypertension"/>
                                </label> Have Hypertension
                            </div>
                            <div class="col-sm-6">
                                <label>
                                    <input type="checkbox" id="disability"/>
                                </label> Have Disability
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>
                                    <input type="checkbox" id="health_problem"/>
                                </label> Any health problem
                            </div>
                            <div class="col-sm-6">
                                <label>
                                    <input type="checkbox" id="allergy_for_drug"/>
                                </label> Any allergy for drug
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="countries">Country</label></div>
                            <div class="col-md-6">
                                <select class="form-control chained valid" id="countries" required>
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
                            <div class="col-md-2"><label for="cities">City</label></div>
                            <div class="col-md-6">
                                <select class="form-control chained valid" id="cities" disabled required>
                                    <option disabled selected>Please select city</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="areas">Area</label></div>
                            <div class="col-md-6">
                                <select class="form-control chained valid" id="areas" disabled required>
                                    <option disabled selected>Please select area</option>
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
                            <div class="col-md-2"><label for="location">Location</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="location">
                            </div>
                        </div>
                    </div>


                    <button class="btn btn-primary float-right">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection