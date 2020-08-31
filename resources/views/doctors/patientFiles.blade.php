@extends('layouts.doctorsApp')

@section('title', 'Add profile')

@section('content')

    <br />
    <br />
    <div class="container">
        <div class="row">
            <div class="col-12 direction-text text-right">
                لإضافة ملفات اذهب الى الشاشة الرئيسية للمريض من<a href="/doctors/profile"> هنا </a>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-12">
                <table id="patients_files_table" class="direction-text table table-bordered datatable-style ">
                    <thead>
                    <tr>
                        <th>اسم الملف</th>
                        <th>التاريخ</th>
                        <th>مساهدة</th>
                        <th>تعديل</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center">wefwef</td>
                        <td class="text-center">07/04/2020 09:45:08 ص</td>
                        <td class="text-center"><a href="/doctors/profile" class="eye-style"><i class="fa fa-eye"></i></a></td>
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