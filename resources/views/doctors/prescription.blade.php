@extends('layouts.doctorsApp')

@section('title', 'Add profile')

@section('content')

    <br />
    <br />
    <div class="container">
        <div class="row">
            <div class="col-12 direction-text text-right">
                لإضافة وصفات طبية اذهب الى الشاشة الرئيسية لمواعيد المريض من<a href="/doctors/patient/appointments"> هنا </a>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-12">
                <table id="patients_prescription_table" class="direction-text table table-bordered datatable-style">
                    <thead>
                    <tr>
                        <th>رقم الوصفة</th>
                        <th>التاريخ</th>
                        <th>مشاهدة</th>
                        <th>تعديل</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center">675765</td>
                        <td class="text-center">07/04/2020 09:45:08 ص</td>
                        <td class="text-center"><a href="/doctors/patient/prescriptions" class="eye-style"><i class="fa fa-eye"></i></a></td>
                        <td class="text-center">-</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <br />
    <br />
    <br />

@endsection