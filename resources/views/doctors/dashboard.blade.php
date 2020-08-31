@extends('layouts.doctorsApp')

@section('title', 'Doctors Dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 dashboard-main-div">
            <div class="row">
                <div class="col-md-3 dashboard-main-sections">
                    <div class="row">
                        <a href="/doctors/diaries" class="m-auto"><img src="/diaries.png" alt="" class="dashboard-images"></a>
                    </div>
                    <br />
                    <div class="row">
                        <div class="line"></div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="dashboard-headers">Doctor Diaries</div>
                    </div>
                    <div class="row">
                        <div class="dashboard-headers">اليوميات</div>
                    </div>
                </div>
                <div class="col-md-3 dashboard-main-sections">
                    <div class="row">
                        <a href="/doctors/drugs" class="m-auto"><img src="/medicine.png" alt="" class="dashboard-images"></a>
                    </div>
                    <br />
                    <div class="row">
                        <div class="line"></div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="dashboard-headers">Medicine</div>
                    </div>
                    <div class="row">
                        <div class="dashboard-headers">الأدوية</div>
                    </div>
                </div>
                <div class="col-md-3 dashboard-main-sections">
                    <div class="row">
                        <a href="/doctors/profiles" class="dashboard-images"><img src="/profile.png" alt="" class="dashboard-images"></a>
                    </div>
                    <br />
                    <div class="row">
                        <div class="line"></div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="dashboard-headers">Patients Profile</div>
                    </div>
                    <div class="row">
                        <div class="dashboard-headers">ملف المرضى</div>
                    </div>
                </div>
                <div class="col-md-3 dashboard-main-sections">
                    <div class="row">
                        <a class="m-auto" href="/doctors/appointments"><img src="/appointment.png" alt="" class="dashboard-images"></a>
                    </div>
                    <br />
                    <div class="row">
                        <div class="line"></div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="dashboard-headers">Appointments</div>
                    </div>
                    <div class="row">
                        <div class="dashboard-headers">المواعيد</div>
                    </div>
                </div>
            </div>
            <br />
            <br />
            <div class="row">
                <div class="col-12 dashboard-bottom-div">
                    <table class="table table-bordered dashboard-table">
                        <thead>
                            <tr>
                                <th>الاتصال المرئي</th>
                                <th>الغاء الموعد</th>
                                <th>اضافة/تعديل وصفة طبية</th>
                                <th>التاريخ </th>
                                <th>نهاية الموعد</th>
                                <th>بدء الموعد</th>
                                <th>اسم العيادة</th>
                                <th>صورة المريض</th>
                                <th>اسم المريض</th>
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

@endsection