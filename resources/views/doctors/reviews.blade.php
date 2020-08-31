@extends('layouts.doctorsApp')

@section('title', 'Patients profile')

@section('content')
    <br />
    <br />

    <div class="container">

        <br />
        <table id="patients_profile_table" class="direction-text table table-bordered datatable-style">
            <thead>
            <tr>
                <th>اسم المريض</th>
                <th>صورة المريض</th>
                <th>تقييم المريض</th>
                <th>الملف الشخصي للمريض</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-center custom-padding">test</td>
                <td class="text-center"><img class="profile-images" src="/lion.jpg" alt=""></td>
                <td class="text-center custom-padding">4</td>
                <td class="text-center custom-padding"><a href="/doctors/patient/review" class="eye-style"><i class="fa fa-eye"></i></a></td>
            </tr>
            </tbody>
        </table>
    </div>

    <br />
    <br />
    <br />

@endsection