@extends('layouts.patientsApp')

@section('title', 'Patients Dashboard')

@section('content')

    <div class="row line-header-section">
        <div class="col-12">
            <div class="row">
                <a href="/patients/dashboard">الرئيسية</a> / الاشعارات
            </div>

            <div class="row header-patient">
                المواعيد
            </div>
        </div>
    </div>


    <div class="background-container">
        <div class="container white-container">
            <div class="table-responsive">
                <table  id="patient_notification_table" class="table table-hover table-center mb-0 datatable-style">
                    <thead>
                    <tr>
                        <th>الدكتور</th>
                        <th>التاريخ</th>
                        <th>الموعد</th>
                        <th>الاشعار</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <h2 class="table-avatar">
                                <a href="/patient/doctor/profile" class="avatar avatar-sm mr-2">
                                    <img class="patient-notification avatar-img rounded-circle" src="/lion.jpg">
                                </a>
                                <a href="/patient/doctor/profile" class="notification-name">يارا الصفدي <span>دكتور مسالك بولية</span></a>
                            </h2>
                        </td>
                        <td>18 نيسان 2020</td>
                        <td>
                            <a href="#">
                                عرض الموعد
                            </a>
                        </td>
                        <td class="notification-zoom">
                            يارا الصفدي
                            بدأ بالاتصال المرئي حسب الموعد الذي قمت بحجزه مع الدكتور
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection