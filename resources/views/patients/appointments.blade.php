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
                                <a href="/patients/appointments" class="sidebar-links">
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
                                <a href="/patient/changepassword" class="sidebar-links">
                                    <i class="fa fa-lock"></i>
                                    <span>تغيير كلمة المرور</span>
                                </a>
                            </div>
                        </div>
                        <div class="row sidebar-line">
                            <div class="sidebar-links-div">
                                <a href="#" class="sidebar-links">
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
                                    <div class="col-4 text-center appointments-headers">
                                        <a href="/patients/appointments" class="appointments-headers-text">المواعيد</a>
                                    </div>
                                    <div class="col-4 text-center appointments-headers-others">
                                        <a href="/patients/prescriptions" class="appointments-headers-others-text">الوصفات الطبية</a>
                                    </div>
                                    <div class="col-4 text-center appointments-headers-others">
                                        <a href="/patient/resources" class="appointments-headers-others-text">الملفات</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="appointment-table-container">
                                <div class="container">
                                    <div class="table-responsive">
                                        <table id="patient_appointments_table" class="table table-hover table-center mb-0 datatable-style">
                                            <thead>
                                            <tr>
                                                <th>الدكتور</th>
                                                <th>تاريخ  حجز الموعد</th>
                                                <th>تاريخ الموعد</th>
                                                <th>سعر الكشفية</th>
                                                <th>الحالة</th>
                                                <th>الاتصال المرئي</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-6">                                                     <a href="/Patient/Doctor/Profile/80027/يارا-الصفدي" class="avatar avatar-sm mr-2">
                                                                <img class="avatar-img rounded-circle patient_appointment_images" src="/lion.jpg" >
                                                            </a></div>
                                                        <div class="col-md-6">
                                                            <a href="/patient/doctor/profile/">يارا الصفدي <span>دكتور مسالك بولية</span></a></div>

                                                    </div>
                                                </td>
                                                <td>18 نيسان 2020<span class="d-block text-info">15:00:00</span></td>
                                                <td>18/04/2020 03:00:00 م</td>
                                                <td>50</td>
                                                <td>
                                                    <span class="badge badge-pill bg-success-light">تم الموعد</span>
                                                </td>
                                                <td>
                                                </td>
                                            </tr>
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