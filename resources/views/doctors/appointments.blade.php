@extends('layouts.doctorsApp')

@section('title', 'Patients profile')

@section('content')
    <br />
    <br />

    <div class="container">
        <div class="row">
            <div class="col-8"></div>
            <div class="col-md-3">
                <input id="doctors_appointments_dates" class="form-control dates">
            </div><br/><br/>
            <div class="col-md-1"><button class="search_button">بحث</button></div>
        </div>
        <br />
        <table id="doctors_appointments_table" class="direction-text table table-bordered datatable-style">
            <thead>
            <tr>
                <th>اسم المريض</th>
                <th>صورة المريض</th>
                <th>اسم العيادة</th>
                <th>بدء الموعد</th>
                <th>نهاية الموعد</th>
                <th>التاريخ</th>
                <th>الغاء الموعد</th>
                <th>اضافة/تعديل وصفة طبية</th>
                <th>الاتصال المرئي</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-center custom-padding">test</td>
                <td class="text-center"><img class="profile-images" src="/lion.jpg" alt=""></td>
                <td class="text-center custom-padding">عيادة الأطباء العرب </td>
                <td class="text-center custom-padding">15:00:00</td>
                <td class="text-center custom-padding">16-00-00</td>
                <td class="text-center custom-padding">2020-04-18</td>
                <td class="text-center custom-padding">-</td>
                <td class="text-center custom-padding">-</td>
                <td class="text-center custom-padding"></td>
            </tr>
            </tbody>
        </table>
    </div>

    <br />
    <br />
    <br />

@endsection