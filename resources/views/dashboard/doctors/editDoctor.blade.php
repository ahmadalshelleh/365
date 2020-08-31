@extends('layouts.dashboardApp')

@section('title', 'Edit Doctor')

@section('header')
    <script src="/js/dashboard/doctor.js"></script>
@endsection

@section('content')
    <div class="main-div-content">
        <div class="row">
            <div class="col-md-6 main-div-content-left">Edit doctor</div>
            <div class="col-md-6 main-div-content-right"><a href="/admin/dashboard">Dashboard</a> / Edit doctor</div>
        </div>
    </div>
    <br />
    <div class="body-pages">
        <form id="edit_doctor_form">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="nameAR">Name (AR)</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" value="{{$doctor[0]->nameAR}}" id="nameAR" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="nameEN">Name (EN)</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" value="{{$doctor[0]->nameEN}}" id="nameEN" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="serviceAR">Services (EN)</label></div>
                            <div class="col-md-6">
                                <textarea id="serviceAR">{{$doctor[0]->servicesEN}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="serviceEN">Services (AR)</label></div>
                            <div class="col-md-6">
                                <textarea id="serviceEN">{{$doctor[0]->servicesAR}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="titleEN">Title (EN)</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" value="{{$doctor[0]->titleEN}}" id="titleEN" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="titleAR">Title (AR)</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" value="{{$doctor[0]->titleAR}}" id="titleAR" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="phone">Phone</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" value="{{$doctor[0]->user->phone}}" id="phone" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="clinic">Clinic</label></div>
                            <div class="col-md-6">
                                <select required="" class="form-control" id="clinic" required>
                                    @foreach($clinics as $clinic)
                                        @if($clinic->id === $doctor[0]->clinic_id)
                                            <option value="{{$clinic->id}}" selected>{{$clinic->nameAR}}</option>
                                        @else
                                            <option value="{{$clinic->id}}">{{$clinic->nameAR}}</option>
                                        @endif
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
                                        @if($gen->id === $doctor[0]->general_specialization_id)
                                            <option value="{{$gen->id}}" selected>{{$gen->name}}</option>
                                        @else
                                            <option value="{{$gen->id}}">{{$gen->name}}</option>
                                        @endif
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
                                        @if($dir->id === $doctor[0]->direct_specialization_id)
                                            <option value="{{$dir->id}}" selected>{{$dir->name}}</option>
                                        @else
                                            <option value="{{$dir->id}}">{{$dir->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="insurance">Insurance</label></div>
                            <div class="col-md-6">
                                <select class="form-control" id="insurance" required>
                                    @foreach($insurances as $insurance)
                                        @if($insurance->id === $doctor[0]->insurance_id)
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
                            <div class="col-md-2"><label for="email">email</label></div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" value="{{$doctor[0]->user->email}}" id="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="website">Website</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" value="{{$doctor[0]->website}}" id="website" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="fees">Fess</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" value="{{$doctor[0]->fees}}" id="fees" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="wait">Waiting (minutes)</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" value="{{$doctor[0]->wait}}" id="wait" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="duration">Duration</label></div>
                            <div class="col-md-6">
                                <select class="form-control" id="duration" required>
                                    @foreach($durations as $duration)
                                        @if($duration->id === $doctor[0]->duration_id)
                                            <option value="{{$duration->id}}" selected>{{$duration->name}}</option>
                                        @else
                                            <option value="{{$duration->id}}">{{$duration->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="countries">Country</label></div>
                            <div class="col-md-6">
                                <select class="form-control chained valid" id="countries">
                                    @foreach($countries as $country)
                                        @if($country->id === $doctor[0]->user->country_id)
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
                            <div class="col-md-2"><label for="cities">City</label></div>
                            <div class="col-md-6">
                                <select class="form-control chained valid" id="cities" required>
                                    @foreach($cities as $city)
                                        @if($city->id === $doctor[0]->user->city_id)
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
                            <div class="col-md-2"><label for="areas">Area</label></div>
                            <div class="col-md-6">
                                <select class="form-control chained valid" id="areas" required>
                                    @foreach($areas as $area)
                                        @if("$area->id" === $doctor[0]->user->area_id)
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
                                        src="https://maps.google.com/maps?q={{$doctor[0]->lat}}, {{$doctor[0]->long}}&hl=es&z=14&amp;output=embed"
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
                                        <label for="name">Lat:</label><input type="text" class="form-control" id="lat" value="{{$doctor[0]->lat}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name">Long:</label><input type="text" class="form-control" id="long" value="{{$doctor[0]->long}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="location">Location</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="location" value="{{$doctor[0]->user->location}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="password">Password</label></div>
                            <div class="col-md-6">
                                <input type="password" class="form-control" id="password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="image">image</label></div>
                            <div class="col-md-6">
                                <input type="file" id="image">
                                <br /><br />
                                <img src="/uploads/images/{{$doctor[0]->image->name}}" width="200" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="descriptionAR">Description (AR)</label></div>
                            <div class="col-md-6">
                                <textarea id="descriptionAR">{{$doctor[0]->descriptionAR}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="descriptionEN">Description (EN)</label></div>
                            <div class="col-md-6">
                                <textarea id="descriptionEN">{{$doctor[0]->descriptionEN}}</textarea>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="doctor_id" value="{{$doctor[0]->id}}" />
                    <button class="btn btn-primary float-right">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection