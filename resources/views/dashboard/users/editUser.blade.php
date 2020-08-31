@extends('layouts.dashboardApp')

@section('title', 'Edit User')

@section('header')
    <script src="/js/dashboard/user.js"></script>
@endsection

@section('content')
    <div class="main-div-content">
        <div class="row">
            <div class="col-md-6 main-div-content-left">Edit user</div>
            <div class="col-md-6 main-div-content-right"><a href="/admin/dashboard">Dashboard</a> / Edit user</div>
        </div>
    </div>
    <br />
    <div class="body-pages">
        {{$user[0]}}
        <form id="edit_user_form">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Name</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="name" value="{{$user->name}}" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="phone">Phone</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="phone" value="{{$user->phone}}" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="email">Email</label></div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" id="email" value="{{$user->email}}" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="password">Password</label></div>
                            <div class="col-md-6">
                                <input type="password" class="form-control" id="password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="group">{{$user->group}}Group</label></div>
                            <div class="col-md-6">
                                <select id="group" class="valid form-control" required>
                                    <option value="normalUser" @if($user->group === 'normalUser') selected @endif>مستخدم عادي</option>
                                    <option value="writer" @if($user->group === 'writer') selected @endif>كاتب</option>
                                    <option value="editor" @if($user->group === 'editor') selected @endif>محرر</option>
                                    <option value="admin" @if($user->group === 'admin') selected @endif>ادمن</option>
                                    <option value="supervisor" @if($user->group === 'supervisor') selected @endif>مشرف</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="image">Image</label></div>
                            <div class="col-md-6">
                                <input type="file" id="image">
                                <br /><br />
                                <img src="/uploads/images/{{$image->name}}" width="200" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Active</label></div>
                            <div class="col-md-6">
                                @if($user->active === 1)
                                    <input type="checkbox" checked id="active">
                                @else
                                    <input type="checkbox" id="active">
                                @endif
                            </div>
                        </div>
                    </div>
                    <input type="hidden" value="{{$user->id}}" id="user_id" />
                    <button class="btn btn-primary float-right">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection