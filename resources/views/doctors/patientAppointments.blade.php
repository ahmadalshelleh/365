@extends('layouts.doctorsApp')

@section('title', 'Patients profile')

@section('content')
    <br />
    <br />

    <div class="container">
        <div class="row">
            <div class="col-8"></div>
            <div class="col-md-1"><button class="search_button">بحث</button></div>
            <div class="col-md-3">
                <input id="appointments_dates" class="form-control dates">
            </div>
        </div>
        <br>
        <table id="patients_appointments_table" class="direction-text table table-bordered datatable-style">
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
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <br />
    <br />
    <br />

@endsection