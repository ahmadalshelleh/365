@extends('layouts.dashboardApp')

@section('title', 'Pharmacy')

@section('header')
    <script src="/js/dashboard/pharmacy.js"></script>
@endsection

@section('content')
    <div class="main-div-content">
        <div class="row">
            <div class="col-md-6 main-div-content-left">Pharmacy</div>
            <div class="col-md-6 main-div-content-right"><a href="/admin/dashboard">Dashboard</a> / pharmacy</div>
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
                    @foreach($pharmacies as $pharmacy)
                        <tr>
                            <td>{{$pharmacy->id}}</td>
                            <td>{{$pharmacy->nameAR}}</td>
                            <td><a href="/admin/pharmacy/edit/{{$pharmacy->id}}">Edit</a></td>
                            <td><a href="#" onclick="deletePharmacy({{$pharmacy->id}})">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection