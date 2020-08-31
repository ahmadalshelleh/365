@extends('layouts.patientsApp')

@section('title', 'Patients Dashboard')

@section('content')

    <div class="row line-header-section">
        <div class="col-12">
            <div class="row">
                <a href="/patients/dashboard">الرئيسية</a> /صفحة الأطباء/ يارا الصفدي
            </div>

            <div class="row header-patient">
                يارا الصفدي
            </div>
        </div>
    </div>

    <div class="background-container">
        <div class="container white-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="row">
                            <div class="patient-doctor-profile-div">San Francisco, CA, USA</div>
                        </div><br />
                        <div class="row">
                            <div class="patient-doctor-profile-div">50</div>
                        </div><br />
                        <div class="row">
                            <div class="patient-doctor-profile-div">
                            <a href="mailto:" class="btn btn-white patient-doctor-icons" target="_blank">
                                <i class="fa fa-envelope"></i>
                            </a>
                            <a href="Tel:064896225" class="btn btn-white patient-doctor-icons" target="_blank">
                                <i class="fa fa-phone"></i>
                            </a>
                            </div>
                        </div><br />
                        <div class="row">
                            <a href="/patient/doctor/appointment"><div class="patient-doctor-profile-button">احجز موعد</div></a>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-12 text-right">
                                        <h5>يارا الصفدي</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-right">دكتور مسالك بولية</div>
                                </div><br />
                                <div class="row">
                                    <div class="col-12">
                                        <div class="doc-location text-right direction-text">
                                            <i class="fa fa-map-marker"></i>
                                            San Francisco, CA, USA
                                            <a href="http://maps.google.com/maps?q=31.957767,32.957767" target="_blank">الاتجاهات على جوجل</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="doc-location text-right direction-text">
                                            <i class="fa fa-envelope"></i>
                                            yaraalsafadi@gmail.com
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="doc-location direction-text text-right">
                                            <i class="fa fa-phone"></i>
                                            <span>
                                            064896225
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img src="/lion.jpg" class="patient-doctor-image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="background-container">
        <div class="container white-container">
            <div class="container">
                <div class="row">
                    <div class="patient-doctor-bottom-header">نظرة عامة</div>
                </div><br />
                <div class="row">
                    <div class="patient-doctor-bottom-line"></div>
                </div><br />
                <div class="row">
                    <div class="patient-doctor-bottom-text">نبذة عني</div>
                </div><br />
                <div class="row">
                    <div class="patient-doctor-bottom-text">الخدمات</div>
                </div><br />
                <div class="row">
                    <div class="patient-doctor-bottom-text">شركات التأمين</div>
                </div>
            </div>
        </div>
    </div>
@endsection