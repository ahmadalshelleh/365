@extends('layouts.dashboardApp')

@section('title', 'Patient')

@section('header')
    <script src="/js/dashboard/patient.js"></script>
@endsection

@section('content')
    <div class="main-div-content">
        <div class="row">
            <div class="col-md-6 main-div-content-left">patients</div>
            <div class="col-md-6 main-div-content-right"><a href="/admin/dashboard">Dashboard</a> / patients</div>
        </div>
    </div>
    <br />
    <div class="body-pages">
        <div class="row">
            <div class="col-12 div-overflow">
                <table class="table table-bordered table-hover pages-table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>EMAIL</th>
                        <th>NAME</th>
                        <th>ICON</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
{{--                        <th>DIARIES</th>--}}
{{--                        <th>Add Diary</th>--}}
{{--                        <th>Daily Notices</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($patients as $patient)
                        <tr>
                            <td>{{$patient->id}}</td>
                            <td>{{$patient->user->email}}</td>
                            <td>{{$patient->nameAR}}</td>
                            <td><img src="/uploads/images/{{$patient->image->name}}" alt="" class="img-fluid icon"></td>
                            <td><a href="/admin/patients/edit/{{$patient->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                            <td><a href="#" onclick="deletePatient({{$patient->id}})"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
{{--                            <td><i class="fa fa-eye"></i></td>--}}
{{--                            <td><i class="fa fa-eye"></i></td>--}}
{{--                            <td><i class="fa fa-eye"></i></td>--}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection