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
                                <a href="/#" class="sidebar-links">
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
                            <label>كلمة المرور القديمة</label>
                            <input type="password"  class="form-control"/>
                        </div><br />
                        <div class="row">
                            <label>كلمة المرور الجديدة</label>
                            <input type="password"  class="form-control"/>
                        </div><br />
                        <div class="row">
                            <label>تأكيد كلمة المرور</label>
                            <input type="password"  class="form-control"/>
                        </div><br />
                        <div class="row">
                            <div class="col-md-6">
                                <div class="profile-patient-save text-center">حفظ التعديلات</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection