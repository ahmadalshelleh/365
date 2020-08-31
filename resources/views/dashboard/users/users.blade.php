@extends('layouts.dashboardApp')

@section('title', 'Users')

@section('header')
    <script src="/js/dashboard/user.js"></script>
@endsection

@section('content')
    <div class="main-div-content">
        <div class="row">
            <div class="col-md-6 main-div-content-left">Users</div>
            <div class="col-md-6 main-div-content-right"><a href="/admin/dashboard">Dashboard</a> / users</div>
        </div>
    </div>
    <br />
    <div class="body-pages">
{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <div class="search-div">--}}
{{--                    <input type="text" class="search-input" placeholder="Search by keyword"/>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <br />
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered table-hover pages-table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>EMAIL</th>
                        <th>NAME</th>
                        <th>ICON</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->name}}</td>
                                <td><img src="/uploads/images/{{$user->image->name}}" alt="" class="img-fluid icon"></td>
                                <td><a href="/admin/user/edit/{{$user->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                                <td><a href="#" onclick="deleteUser({{$user->id}})"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
{{--                <br />--}}
{{--                <ul class="pagination xs-pull-center m-0 simple-pagination">--}}
{{--                    <li class="disabled">--}}
{{--                        <span class="current prev page-link">--}}
{{--                            <span aria-hidden="true">«</span>--}}
{{--                        </span>--}}
{{--                    </li>--}}
{{--                    <li class="active">--}}
{{--                        <span class="current page-link">1</span>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#page-2" class="page-link next">--}}
{{--                            <span aria-hidden="true">»</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
            </div>
        </div>
    </div>
@endsection