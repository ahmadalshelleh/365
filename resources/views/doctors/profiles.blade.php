@extends('layouts.doctorsApp')

@section('title', 'Patients profile')

@section('content')
<br />
<br />

    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="/doctors/profile/add" class="direction-text add-profile-button">
                    <i class="fa fa-plus addicon"></i>
                    اضافة مريض
                </a>
            </div>
        </div>
        
        <br />
        <table id="patients_profile_table" class="direction-text table table-bordered datatable-style">
            <thead>
            <tr>
                <th>اسم المريض</th>
                <th>صورة المريض</th>
                <th>لشاشة الرئيسية</th>
                <th>الملف الشخصي للمريض</th>
                <th>ملفات المريض</th>
                <th>الوصفات الطبية الموصفة للمريض</th>
                <th>يوميات المريض</th>
                <th>مواعيد المريض</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-center custom-padding">test</td>
                <td class="text-center"><img class="profile-images" src="/lion.jpg" alt=""></td>
                <td class="text-center custom-padding"><a href="/doctors/profile" class="eye-style"><i class="fa fa-eye"></i></a></td>
                <td class="text-center custom-padding"><a href="/doctors/patient" class="eye-style"><i class="fa fa-eye"></i></a></td>
                <td class="text-center custom-padding"><a href="/doctors/patient/files" class="eye-style"><i class="fa fa-eye"></i></a></td>
                <td class="text-center custom-padding"><a href="/doctors/prescription" class="eye-style"><i class="fa fa-eye"></i></a></td>
                <td class="text-center custom-padding"><a href="/doctors/dailynotice" class="eye-style"><i class="fa fa-eye"></i></a></td>
                <td class="text-center custom-padding"><a href="/doctors/patient/appointments" class="eye-style"><i class="fa fa-eye"></i></a></td>
            </tr>
            </tbody>
        </table>
    </div>

    <br />
    <br />
    <br />

@endsection