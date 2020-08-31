@extends('layouts.dashboardApp')

@section('title', 'Doctor')

@section('header')
    <script src="/js/dashboard/doctor.js"></script>
@endsection

@section('content')
    <div class="main-div-content">
        <div class="row">
            <div class="col-md-6 main-div-content-left">Doctors</div>
            <div class="col-md-6 main-div-content-right"><a href="/admin/dashboard">Dashboard</a> / doctors</div>
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
                        <th>WORKING HOURS</th>
                        <th>APPOINTMENTS</th>
                        <th>PATIENTS</th>
                        <th>DIARIES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($doctors as $doctor)
                        <tr>
                            <td>{{$doctor->id}}</td>
                            <td>{{$doctor->user->email}}</td>
                            <td>{{$doctor->nameAR}}</td>
                            <td><img src="/uploads/images/{{$doctor->image->name}}" alt="" class="img-fluid icon"></td>
                            <td><a href="/admin/doctors/edit/{{$doctor->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                            <td><a href="#" onclick="deleteDoctor({{$doctor->id}})"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                            <td><i class="fa fa-eye"></i></td>
                            <td><i class="fa fa-eye"></i></td>
                            <td><i class="fa fa-eye"></i></td>
                            <td><i class="fa fa-eye"></i></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection