@extends('layouts.doctorsApp')

@section('title', 'Patients profile')

@section('content')

    <br />
    <br />

    <div class="container">
        <div class="row">
            <div class="diaries_buttons active" id="files_send_to">الملفات المرسلة للمرضى</div>
            <div class="diaries_buttons" id="files_recipes_to">الوصفات المرسلة للمرضى</div>
        </div>
        <table id="patients_diaries_table_files" class="direction-text table table-bordered datatable-style">
            <thead>
            <tr>
                <th>اسم المريض</th>
                <th>اسم الملف</th>
                <th>التاريخ</th>
                <th>مشاهدة
                    /
                    تعديل
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>احمد</td>
                <td>التحليل الاول</td>
                <td>12/04/2020 01:28:37 م</td>
                <td>
                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
                </td>
            </tr>
            <tr>
                <td>فادي سنجقية</td>
                <td>wefwef</td>
                <td>07/04/2020 09:45:08 ص</td>
                <td>
                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
                </td>
            </tr>
            </tbody>
        </table>

    </div>

@endsection