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
                            <div class="col-md-3">
                                <img src="/logo.png" class="img-fluid">
                            </div>
                            <br />
                            <br />
                            <div class="col-md-5">
                                <div class="change-photo-btn float-right">
                                    <span class="upload-div" id="upload_patient_image_div"><i class="fa fa-upload" ></i> تحميل صورة</span>
                                    <input type="file" class="upload" name="myFile" id="upload_patient_image">
                                </div>
                            </div>
                        </div>
                        <br /><br />
                        <div class="row">
                            <div class="col-md-6">
                                <label class="float-right">الاسم الكامل</label><br >
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="float-right">تاريخ الميلاد</label>
                                <input id="datepicker" class="form-control"/>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-6">
                                <label class="float-right">زمرة الدم</label><br >
                                <select class="form-control select" name="blood_type">
                                    <option>A-</option>
                                    <option>A+</option>
                                    <option>B-</option>
                                    <option>B+</option>
                                    <option>AB-</option>
                                    <option>AB+</option>
                                    <option>O-</option>
                                    <option>O+</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="float-right">البريد الالكتروني</label>
                                <input type="email" class="form-control"/>
                            </div>
                        </div>
                        <br />
                        <br />
                        <div class="row">
                            <div class="col-md-6">
                                <label class="float-right">رقم الهاتف</label><br >
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="float-right">العنوان</label>
                                <input type="email" class="form-control"/>
                            </div>
                        </div>
                        <br />
                        <br />
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