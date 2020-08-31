@extends('layouts.doctorsApp')

@section('title', 'Reset password')

@section('header')
    <script src="/js/doctor/settings.js"></script>
@endsection

@section('content')

    <br />
    <br />

    <div class="container">
        <form id="change_password_form">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 reset-password">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-right reset-password-header">استعادة كلمة المرور</h2>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-12">
                            <input type="password" class="form-control" id="password" placeholder="كلمة مرور جديدة">
                        </div>
                    </div>
                    <br />
                    <div id="error">
                        <div class="row">
                            <div class="col-12">
                                <span>Passwords doesn't match</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="password" class="form-control" id="confirm_password" placeholder="تأكيد كلمة المرور الجديدة">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-primary float-right">حفظ</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </form>
    </div>

@endsection