@extends('layouts.patientsApp')

@section('title', 'Patients Dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 dashboard-main-div">
                <div class="row">
                    <div class="col-md-4 dashboard-main-sections">
                        <div class="row">
                            <a href="/patient/drugs" class="dashboard-images"><img src="/medicine_patient.png" alt="" class="dashboard-images"></a>
                        </div>
                        <br />
                        <div class="row">
                            <div class="line"></div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="dashboard-headers">الادوية</div>
                        </div>
                    </div>
                    <div class="col-md-4 dashboard-main-sections">
                        <div class="row">
                            <a href="/patient/resources" class="dashboard-images"><img src="/patient_file.png" alt="" class="dashboard-images"></a>
                        </div>
                        <br />
                        <div class="row">
                            <div class="line"></div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="dashboard-headers">الملف الطبي</div>
                        </div>
                    </div>
                    <div class="col-md-4 dashboard-main-sections">
                        <div class="row">
                            <a href="/patient/doctors" class="dashboard-images"><img src="/appointment_patient.png" alt="" class="dashboard-images"></a>
                        </div>
                        <br />
                        <div class="row">
                            <div class="line"></div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="dashboard-headers">احجز موعد <br>مع الطبيب</div>
                        </div>
                    </div>
                </div>
                <br />
            </div>
        </div>
    </div>

@endsection