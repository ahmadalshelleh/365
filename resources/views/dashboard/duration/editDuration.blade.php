@extends('layouts.dashboardApp')

@section('title', 'Edit Duration')

@section('header')
    <script src="/js/dashboard/duration.js"></script>
@endsection

@section('content')
    <div class="main-div-content">
        <div class="row">
            <div class="col-md-6 main-div-content-left">Edit duration</div>
            <div class="col-md-6 main-div-content-right"><a href="/admin/dashboard">Dashboard</a> / Edit duration</div>
        </div>
    </div>
    <br />
    <div class="body-pages">
        <form id="edit_duration_form">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Duration</label></div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" value="{{$duration->name}}" id="edit_duration_name" required>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="edit_duration_id" value="{{$duration->id}}"/>
                    <button class="btn btn-primary float-right">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection