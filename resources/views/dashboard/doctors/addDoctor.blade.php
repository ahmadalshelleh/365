@extends('layouts.dashboardApp')

@section('title', 'Add Doctor')

@section('header')
    <script src="/js/dashboard/doctor.js"></script>
@endsection

@section('content')
    <div class="main-div-content">
        <div class="row">
            <div class="col-md-6 main-div-content-left">Add doctor</div>
            <div class="col-md-6 main-div-content-right"><a href="/admin/dashboard">Dashboard</a> / Add doctor</div>
        </div>
    </div>
    <br />
    <div class="body-pages">
        <form id="create_doctor_form">
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
                            <div class="col-md-2"><label for="serviceAR">Services (AR)</label></div>
                            <div class="col-md-6">
                                <textarea id="serviceAR"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="serviceEN">Services (EN)</label></div>
                            <div class="col-md-6">
                                <textarea id="serviceEN"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="titleAR">Title (AR)</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="titleAR" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="titleEN">Title (EN)</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="titleEN" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="phone">Phone</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="phone" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="clinic">Clinic</label></div>
                            <div class="col-md-6">
                                <select required="" class="form-control" id="clinic" required>
                                    @foreach($clinics as $clinic)
                                        <option value="{{$clinic->id}}">{{$clinic->nameAR}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="general_specialization">General Specialization</label></div>
                            <div class="col-md-6">
                                <select required="" class="form-control" id="general_specialization" required>
                                    @foreach($general as $gen)
                                        <option value="{{$gen->id}}">{{$gen->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="direct_specialization">Direct specialization</label></div>
                            <div class="col-md-6">
                                <select required="" class="form-control" id="direct_specialization" required>
                                    @foreach($direct as $dir)
                                        <option value="{{$dir->id}}">{{$dir->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="insurance">Insurance</label></div>
                            <div class="col-md-6">
                                <select required="" class="form-control" id="insurance" required>
                                    @foreach($insurances as $insurance)
                                        <option value="{{$insurance->id}}">{{$insurance->nameAR}}</option>
                                    @endforeach
                                </select>
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
                            <div class="col-md-2"><label for="website">Website</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="website" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="fees">Fess</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="fees" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="wait">Waiting (minutes)</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="wait" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Duration</label></div>
                            <div class="col-md-6">
                                <select required="" class="form-control" id="duration" required>
                                    @foreach($durations as $duration)
                                        <option value="{{$duration->id}}">{{$duration->name}}</option>
                                    @endforeach
                                </select>
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
                            <div class="col-md-2"><label for="name">City</label></div>
                            <div class="col-md-6">
                                <select class="form-control chained valid" id="cities" disabled required>
                                    <option selected disabled>Please select city</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Area</label></div>
                            <div class="col-md-6">
                                <select class="form-control chained valid" id="areas" disabled required>
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
                            <div class="col-md-2"><label for="location">Location</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="location" required>
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
                            <div class="col-md-2"><label for="image">image</label></div>
                            <div class="col-md-6">
                                <input type="file" id="image" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="descriptionAR">Description (AR)</label></div>
                            <div class="col-md-6">
                                <textarea id="descriptionAR"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="descriptionEN">Description (EN)</label></div>
                            <div class="col-md-6">
                                <textarea id="descriptionEN"></textarea>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary float-right">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection