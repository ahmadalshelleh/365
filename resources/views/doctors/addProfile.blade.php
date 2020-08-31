@extends('layouts.doctorsApp')

@section('title', 'Add profile')

@section('content')
    <br />
    <br />

    <div class="container">
        <div class="row">
            <div class="col-12 add-profile-column">
                <span class="add-profile-header direction-text"> جديد</span>
            </div>
        </div>
        <br />
        <br />
        <div class="row direction-text">
            <div class="col-md-3">
                <div class="add-des-container">
                    <div class="add-des">
                        تفاصيل الحساب
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="add-patient-profile-div">
                    <div class="row">
                        <div class="col-12">
                            <div class="add-patient-profile-header">
                                اعتماد المريض سوف يتم ارساله الى البريد الالكتروني للمريض
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-3">
                            <div class="add-profile-label">
                                البريد الالكتروني
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-3">
                            <div class="add-profile-label">
                                اسم المريض
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-3">
                            <div class="add-profile-label">
                                هاتف المريض
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="">
                                <input type="tel" class="form-control tel-input-field" id="tel_input">
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-3">
                        </div>
                        <div class="col-9">
                            <div class="">
                                <button class="add-profile-save" id="">حفظ</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br />
    <br />
    <br />

@endsection
