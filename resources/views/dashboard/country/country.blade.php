@extends('layouts.dashboardApp')

@section('title', 'Countries')

@section('header')
    <script src="/js/dashboard/country.js"></script>
@endsection

@section('content')
    <div class="main-div-content">
        <div class="row">
            <div class="col-md-6 main-div-content-left">Countries</div>
            <div class="col-md-6 main-div-content-right"><a href="/admin/dashboard">Dashboard</a> / countries</div>
        </div>
    </div>
    <br />
    <div class="body-pages">
        <div class="row">
            <div class="col-12">
                <div class="search-div">
                    <input type="text" class="search-input" placeholder="Search by keyword"/>
                </div>
            </div>
        </div>
        <br />
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
                        @foreach($countries as $country)
                            <tr>
                                <td>{{$country->id}}</td>
                                <td>{{$country->nameEN}}</td>
                                <td><a href="/admin/country/edit/{{$country->id}}">Edit</a></td>
                                <td><a href="#" onclick="deleteCountry({{$country->id}})">Delete</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <br />
                <ul class="pagination xs-pull-center m-0 simple-pagination">
                    <li class="disabled">
                        <span class="current prev page-link">
                            <span aria-hidden="true">«</span>
                        </span>
                    </li>
                    <li class="active">
                        <span class="current page-link">1</span>
                    </li>
                    <li>
                        <a href="#page-2" class="page-link next">
                            <span aria-hidden="true">»</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection