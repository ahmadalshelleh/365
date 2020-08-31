@extends('layouts.dashboardApp')

@section('title', 'Specialization')

@section('header')
    <script src="/js/dashboard/specialization.js"></script>
@endsection

@section('content')
    <div class="main-div-content">
        <div class="row">
            <div class="col-md-6 main-div-content-left">Specialization</div>
            <div class="col-md-6 main-div-content-right"><a href="/admin/dashboard">Dashboard</a> / specialization</div>
        </div>
    </div>
    <br />
    <div class="body-pages">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered table-hover pages-table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($specializations as $specialization)
                        <tr>
                            <td>{{$specialization->id}}</td>
                            <td>{{$specialization->name}}</td>
                            <td><a href="/admin/specialization/edit/{{$specialization->id}}">Edit</a></td>
                            <td><a href="#" onclick="deleteSpecialization({{$specialization->id}})">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection