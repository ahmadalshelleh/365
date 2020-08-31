@extends('layouts.doctorsApp')

@section('title', 'Edit profile')

@section('header')
    <script src="/js/doctor/settings.js"></script>
@endsection

@section('content')

    <br />
    <br />

    <div class="container">
        <form id="edit_doctor_form">
            <div class="row">
                <div class="col-12 add-profile-column">
                    <span class="add-profile-header direction-text"> جديد</span>
                </div>
            </div>
            <br />
            <br />
            <div class="row direction-text">
                <div class="col-md-3">
                    <div class="add-des-container">
                        <div class="add-des">
                            تفاصيل الحساب
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="add-patient-profile-div">
                        <br />
                        <div class="row">
                            <div class="col-md-3">
                                <div class="add-profile-label">
                                    الاسم بالعربي
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="">
                                    <input type="text" class="form-control" id="nameAR" value="{{$doctor_info['nameAR']}}">
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-3">
                                <div class="add-profile-label">
                                    الاسم بالانجليزي
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="">
                                    <input type="text" class="form-control" id="nameEN" value="{{$doctor_info['nameEN']}}">
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-3">
                                <div class="add-profile-label">
                                    الخدمات بالعربي
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="">
                                    <textarea id="serviceAR">{{$doctor_info->servicesAR}}</textarea>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-3">
                                <div class="add-profile-label">
                                    الخدمات بالانجليزي
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="">
                                    <textarea id="serviceEN">{{$doctor_info->servicesEN}}</textarea>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-3">
                                <div class="add-profile-label">
                                    العنوان بالعربي
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="">
                                    <input type="text" class="form-control" value="{{$doctor_info->titleAR}}" id="titleAR" required>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-3">
                                <div class="add-profile-label">
                                    العنوان بالانجليزي
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="">
                                    <input type="text" class="form-control" value="{{$doctor_info->titleEN}}" id="titleEN" required>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-3">
                                <div class="add-profile-label">
                                    رقم الهاتف
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="">
                                    <input type="text" class="form-control" value="{{$doctor->phone}}" id="phone" required>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-3">
                                <div class="add-profile-label">
                                    العيادة
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="">
                                    <select required="" class="form-control" id="clinic" required>
                                        @foreach($clinics as $clinic)
                                            @if($clinic->id === $doctor_info->clinic_id)
                                                <option value="{{$clinic->id}}" selected>{{$clinic->nameAR}}</option>
                                            @else
                                                <option value="{{$clinic->id}}">{{$clinic->nameAR}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-3">
                                <div class="add-profile-label">
                                    التخصص العام
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="">
                                    <select required="" class="form-control" id="general_specialization" required>
                                        @foreach($general as $gen)
                                            @if($gen->id === $doctor_info->general_specialization_id)
                                                <option value="{{$gen->id}}" selected>{{$gen->name}}</option>
                                            @else
                                                <option value="{{$gen->id}}">{{$gen->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-3">
                                <div class="add-profile-label">
                                    التخصص المباشر
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="">
                                    <select required="" class="form-control" id="direct_specialization" required>
                                        @foreach($direct as $dir)
                                            @if($dir->id === $doctor_info->direct_specialization_id)
                                                <option value="{{$dir->id}}" selected>{{$dir->name}}</option>
                                            @else
                                                <option value="{{$dir->id}}">{{$dir->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-3">
                                <div class="add-profile-label">
                                    التأمين
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="">
                                    <select class="form-control" id="insurance" required>
                                        @foreach($insurances as $insurance)
                                            @if($insurance->id === $doctor_info->insurance_id)
                                                <option value="{{$insurance->id}}" selected>{{$insurance->nameAR}}</option>
                                            @else
                                                <option value="{{$insurance->id}}">{{$insurance->nameAR}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-3">
                                <div class="add-profile-label">
                                    البريد الالكتروني
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="">
                                    <input type="email" class="form-control" value="{{$doctor->email}}" id="email" required>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-3">
                                <div class="add-profile-label">
                                    الموقع الالكتروني
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="">
                                    <input type="text" class="form-control" value="{{$doctor_info->website}}" id="website" required>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-3">
                                <div class="add-profile-label">
                                    الرسوم
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="">
                                    <input type="text" class="form-control" value="{{$doctor_info->fees}}" id="fees" required>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-3">
                                <div class="add-profile-label">
                                    مدة الانتظار
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="">
                                    <input type="text" class="form-control" value="{{$doctor_info->wait}}" id="wait" required>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-3">
                                <div class="add-profile-label">
                                    المدة الزمنية
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="">
                                    <select class="form-control" id="duration" required>
                                        @foreach($durations as $duration)
                                            @if($duration->id === $doctor_info->duration_id)
                                                <option value="{{$duration->id}}" selected>{{$duration->name}}</option>
                                            @else
                                                <option value="{{$duration->id}}">{{$duration->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-3">
                                <div class="add-profile-label">
                                    البلد
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="">
                                    <select class="form-control chained valid" id="countries">
                                        @foreach($countries as $country)
                                            @if($country->id === $doctor->country_id)
                                                <option value="{{$country->id}}" selected>{{$country->nameAR}}</option>
                                            @else
                                                <option value="{{$country->id}}">{{$country->nameAR}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-3">
                                <div class="add-profile-label">
                                    المدينة
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="">
                                    <select class="form-control chained valid" id="cities" required>
                                        @foreach($cities as $city)
                                            @if($city->id === $doctor->city_id)
                                                <option value="{{$city->id}}" selected>{{$city->nameAR}}</option>
                                            @else
                                                <option value="{{$city->id}}">{{$city->nameAR}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-3">
                                <div class="add-profile-label">
                                    المنطقة
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="">
                                    <select class="form-control chained valid" id="areas" required>
                                        @foreach($areas as $area)
                                            @if("$area->id" === $doctor->area_id)
                                                <option value="{{$area->id}}" selected>{{$area->nameAR}}</option>
                                            @else
                                                <option value="{{$area->id}}">{{$area->nameAR}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-9" id="div-map">
                                    <iframe
                                            src="https://maps.google.com/maps?q={{$doctor_info->lat}}, {{$doctor_info->long}}&hl=es&z=14&amp;output=embed"
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
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="name">خط العرض:</label><input type="text" class="form-control" id="lat" value="{{$doctor_info->lat}}">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="name">خط الطول:</label><input type="text" class="form-control" id="long" value="{{$doctor_info->long}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-3">
                                <div class="add-profile-label">
                                    الموقع
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="">
                                    <input type="text" class="form-control" id="location" value="{{$doctor->location}}">
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-3">
                                <div class="add-profile-label">
                                    الرقم السري
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="">
                                    <input type="password" class="form-control" id="password">
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-3">
                                <div class="add-profile-label">
                                    الصورة
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="">
                                    <input type="file" id="image">
                                    <br /><br />
                                    <img src="/uploads/images/{{$doctor_image->name}}" width="200" />
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-3">
                                <div class="add-profile-label">
                                    التفاصيل بالعربي
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="">
                                    <textarea id="descriptionAR">{{$doctor_info->descriptionAR}}</textarea>
                                </div>
                            </div>
                        </div>
                        <br />

                        <div class="row">
                            <div class="col-md-3">
                                <div class="add-profile-label">
                                    التفاصيل بالانجليزي
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="">
                                    <textarea id="descriptionEN">{{$doctor_info->descriptionEN}}</textarea>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" id="doctor_id" value="{{$doctor_info->id}}" />
                        <input type="hidden" id="user_id" value="{{$doctor->id}}" />
                        <br />
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                <div class="">
                                    <button class="add-profile-save" id="">حفظ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <br />
    <br />
    <br />

@endsection
