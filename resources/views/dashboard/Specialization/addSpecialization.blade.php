@extends('layouts.dashboardApp')

@section('title', 'Add Specialization')

@section('header')
    <script src="/js/dashboard/specialization.js"></script>
@endsection

@section('content')
    <div class="main-div-content">
        <div class="row">
            <div class="col-md-6 main-div-content-left">Add specialization</div>
            <div class="col-md-6 main-div-content-right"><a href="/admin/dashboard">Dashboard</a> / Add specialization</div>
        </div>
    </div>
    <br />
    <div class="body-pages">
        <form id="create_specialization_form">
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
                            <div class="col-md-2"><label for="name">Type</label></div>
                            <div class="col-md-6">
                                <label><input type="radio" id="direct" name="type" checked> Direct</label>
                                <label><input type="radio" id="general" name="type"> General</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Description</label></div>
                            <div class="col-md-6">
                                <textarea id="specialization_add" name="description"></textarea>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary float-right" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection