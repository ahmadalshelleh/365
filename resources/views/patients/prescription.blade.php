@extends('layouts.patientsApp')

@section('title', 'Patients Dashboard')

@section('content')

    <div class="row line-header-section">
        <div class="col-12">
            <div class="row">
                <a href="/patients/dashboard">الرئيسية</a> / لوحة التحكم / المواعيد
            </div>

            <div class="row header-patient">
                المواعيد
            </div>
        </div>
    </div>

    <div class="background-container">
        <div class="container">
            <div class="row direction-text">
                <div class="col-md-4">
                    <div class="white-container">
                        <div class="row">
                            <img src="/logo.jpg" class="patient-sidebar-image">
                        </div><br />
                        <div class="row">
                            <div class="text-center patient-sidebar-header">
                                <h6>ahmad</h6>
                                <div class="patient-details">
                                    <h6 class="mb-0"><i class="fa fa-map-marker"></i></h6>
                                </div>
                            </div>
                        </div><br />
                        <div class="row sidebar-line">
                            <div class="sidebar-links-div">
                                <a href="/Patient/Appointments" class="sidebar-links">
                                    <i class="fa fa-columns"></i>
                                    <span>لوحة التحكم</span>
                                </a>
                            </div>
                        </div>
                        <div class="row sidebar-line">
                            <div class="sidebar-links-div">
                                <a href="/patient/profile" class="sidebar-links">
                                    <i class="fa fa-user"></i>
                                    <span>الملف الشخصي</span>
                                </a>
                            </div>
                        </div>
                        <div class="row sidebar-line">
                            <div class="sidebar-links-div">
                                <a href="/Patient/ChangePassword" class="sidebar-links">
                                    <i class="fa fa-lock"></i>
                                    <span>تغيير كلمة المرور</span>
                                </a>
                            </div>
                        </div>
                        <div class="row sidebar-line">
                            <div class="sidebar-links-div">
                                <a href="/Patient/Logout" class="sidebar-links">
                                    <i class="fa fa-sign-out"></i>
                                    <span>تسجيل الخروج</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="white-container">
                        <div class="row">
                            <div class="container">
                                <div class="row appointments-div">
                                    <div class="col-4 text-center appointments-headers-others">
                                        <a href="/patients/appointments" class="appointments-headers-others-text">المواعيد</a>
                                    </div>
                                    <div class="col-4 text-center appointments-headers">
                                        <a href="/patients/prescriptions" class="appointments-headers-text">الوصفات الطبية</a>
                                    </div>
                                    <div class="col-4 text-center appointments-headers-others">
                                        <a href="/patient/resources" class="appointments-headers-others-text">الملفات</a>
                                    </div>
                                </div>
                            </div>
                        </div><br />
                        <div class="row">
                            <div class="appointment-table-container">
                                <div class="container">
                                    <div class="table-responsive">
                                        <table id="patient_prescription_table" class="table table-hover table-center mb-0 datatable-style">
                                            <thead>
                                            <tr>
                                                <th>رقم الوصفة</th>
                                                <th>التاريخ </th>
                                                <th>الدكتور المسؤول </th>
                                                <th>عرض الوصفة مع الادوية</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection