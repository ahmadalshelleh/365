@extends('layouts.dashboardApp')

@section('title', 'Add User')

@section('header')
    <script src="/js/dashboard/user.js"></script>
@endsection

@section('content')
    <div class="main-div-content">
        <div class="row">
            <div class="col-md-6 main-div-content-left">Add user</div>
            <div class="col-md-6 main-div-content-right"><a href="/admin/dashboard">Dashboard</a> / Add user</div>
        </div>
    </div>
    <br />
    <div class="body-pages">
        <form id="create_user_form">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Name</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="name" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="phone">Phone</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="phone" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="email">Email</label></div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" id="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="password">Password</label></div>
                            <div class="col-md-6">
                                <input type="password" class="form-control" id="password" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="group">Group</label></div>
                            <div class="col-md-6">
                                <select id="group" class="valid form-control" required>
                                    <option value="normalUser">مستخدم عادي</option>
                                    <option value="writer">كاتب</option>
                                    <option value="editor">محرر</option>
                                    <option value="admin">ادمن</option>
                                    <option value="supervisor">مشرف</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="image">Image</label></div>
                            <div class="col-md-6">
                                <input type="file" id="image" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="active">Active</label></div>
                            <div class="col-md-6">
                                <input type="checkbox" id="active">
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary float-right">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection