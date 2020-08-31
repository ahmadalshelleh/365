@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="login-overflow">
        <img src="/loading.gif" id="loading_image">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <center class="login-center-tag">
                    <div class="login-div">
                        <form id="login_form">
                        <div class="row">
                            <div class="col-12">
                                <img src="/logo.png" class="img-fluid">
                            </div>
                        </div>
                        <br />
                        <br />
                        <div class="row">
                            <div class="col-12">
                                <div class="login-header">تسجيل الدخول</div>
                            </div>
                        </div>
                            <br />
                        <div class="row" id="login_error_div">
                            <div class="col-12">
                                <div class="alert alert-danger" role="alert" id="login_error">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <input type="text" class="login-input-fields" id="login_email" required placeholder="Enter email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <input type="password" class="login-input-fields" id="login_password" required placeholder="Enter password">
                                <i class="fa fa-eye field-icon toggle-password" toggle="#password-field" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="#" class="forget-password">هل نسيت كلمة المرور؟</a>
                            </div>
                            <div class="col-md-6">
                                <button class="login-button">دخول</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </center>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection