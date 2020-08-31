@extends('layouts.doctorsApp')

@section('title', 'Patients profile')

@section('content')

    <br />
    <br />

    <div class="container">
        <div class="row">
            <div class="diaries_buttons" id="files_send_to">الملفات المرسلة للمرضى</div>
            <div class="diaries_buttons active" id="files_recipes_to">الوصفات المرسلة للمرضى</div>
        </div>

<table id="patients_diaries_table_recipes" class="direction-text table table-bordered datatable-style">
    <thead>
    <tr>
        <th>اسم المريض</th>
        <th>التاريخ</th>
        <th>
            مشاهدة
            /
            تعديل
        </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>احمد</td>
        <td>12/04/2020 01:27:24 م</td>
        <td><a href="/Doctor/Prescription?appointmentid=130045"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
    </tr>
    <tr>
        <td>فادي سنجقية</td>
        <td>07/04/2020 08:58:17 ص</td>
        <td><a href="/Doctor/Prescription?appointmentid=130042"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
    </tr>
    <tr>
        <td>ahmad shaar</td>
        <td>24/07/2019 09:30:44 ص</td>
        <td><a href="/Doctor/Prescription?appointmentid=110042"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
    </tr>
    </tbody>
</table>
</div>

@endsection