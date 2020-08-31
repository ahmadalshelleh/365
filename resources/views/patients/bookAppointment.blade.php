@extends('layouts.patientsApp')

@section('title', 'Patients Dashboard')

@section('content')

    <div class="row line-header-section">
        <div class="col-12">
            <div class="row">
                <a href="/patients/dashboard">الرئيسية</a> /صفحة الأطباء/ يارا الصفدي/ حجز موعد
            </div>

            <div class="row header-patient">
                حجز موعد
            </div>
        </div>
    </div>

    <div class="background-container">
        <div class="container">
            <div class="row direction-text">
                <div class="white-container-book">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="/lion.jpg" alt="" class="patient-doctor-image">
                        </div>
                        <div class="col-md-4">
                            <br />
                            <div class="row">
                                يارا الصفدي
                            </div>
                            <div class="row">
                                <p class="text-muted mb-0"><i class="fa fa-map-marker"></i>San Francisco, CA, USA</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <div class="row direction-text">
                <div class="white-container-book">
                    <div class="row">
                        <div id="container" class="calendar-container"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection