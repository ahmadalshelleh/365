@extends('layouts.doctorsApp')

@section('title', 'Patients profile')

@section('content')

    <br />
    <br />

    <div class="container">
        <div class="row">
            <div class="col-12 add-profile-column">
                <span class="add-profile-header direction-text">تعديل</span>
            </div>
        </div>
        <br />
        <br />

        <div class="row row-direction">
            <div class="col-md-4">
                عيادات الدكتور
            </div>
            <div class="col-md-8">
                <select name="" id="" class="form-control">
                    <option>عيادة الاطباء العرب</option>
                </select>
            </div>
        </div>
        <br />
        <div class="row row-direction">
            <div class="col-md-3">الاحد</div>
            <div class="col-md-3"><input type="time" class="form-control"></div>
            <br/><br/>
            <div class="col-md-3"><input type="time" class="form-control"></div>
            <div class="col-md-3 direction-text">عطلة؟<input type="checkbox"> </div>
        </div>
        <br/>
        <div class="row row-direction">
            <div class="col-md-3">الاثنين</div>
            <div class="col-md-3"><input type="time" class="form-control"></div>
            <br/><br/>
            <div class="col-md-3"><input type="time" class="form-control"></div>
            <div class="col-md-3 direction-text">عطلة؟<input type="checkbox"> </div>
        </div>
        <br/>
        <div class="row row-direction">
            <div class="col-md-3">الثلاثاء</div>
            <div class="col-md-3"><input type="time" class="form-control"></div>
            <br/><br/>
            <div class="col-md-3"><input type="time" class="form-control"></div>
            <div class="col-md-3 direction-text">عطلة؟<input type="checkbox"> </div>
        </div>
        <br/>
        <div class="row row-direction">
            <div class="col-md-3">الاربعاء</div>
            <div class="col-md-3"><input type="time" class="form-control"></div>
            <br/><br/>
            <div class="col-md-3"><input type="time" class="form-control"></div>
            <div class="col-md-3 direction-text">عطلة؟<input type="checkbox"> </div>
        </div>
        <br/>
        <div class="row row-direction">
            <div class="col-md-3">الخميس</div>
            <div class="col-md-3"><input type="time" class="form-control"></div>
            <br/><br/>
            <div class="col-md-3"><input type="time" class="form-control"></div>
            <div class="col-md-3 direction-text">عطلة؟<input type="checkbox"> </div>
        </div>
        <br/>
        <div class="row row-direction">
            <div class="col-md-3">الجمعة</div>
            <div class="col-md-3"><input type="time" class="form-control" value="13:30"></div>
            <br/><br/>
            <div class="col-md-3"><input type="time" class="form-control"></div>
            <div class="col-md-3 direction-text">عطلة؟<input type="checkbox"> </div>
        </div>
        <br/>
        <div class="row row-direction">
            <div class="col-md-3">السبت</div>
            <div class="col-md-3"><input type="time" class="form-control"></div>
            <br/><br/>
            <div class="col-md-3"><input type="time" class="form-control"></div>
            <div class="col-md-3 direction-text">عطلة؟<input type="checkbox"> </div>
        </div>
<br />
        <div class="row">
            <div class="col-8">
                <center><button class="btn btn-primary">حفظ</button></center>
            </div>
        </div>
    </div>

@endsection