@extends('layouts.dashboardApp')

@section('title', 'Edit Specialization')

@section('header')
    <script src="/js/dashboard/specialization.js"></script>
@endsection

@section('content')
    <div class="main-div-content">
        <div class="row">
            <div class="col-md-6 main-div-content-left">Edit specialization</div>
            <div class="col-md-6 main-div-content-right"><a href="/admin/dashboard">Dashboard</a> / Edit specialization</div>
        </div>
    </div>
    <br />
    <div class="body-pages">
        <form id="edit_specialization_form">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Name</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="name" value="{{$specialization->name}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Parent ID</label></div>
                            <div class="col-md-6">
                                <label><input type="radio" id="direct" name="type" @if($specialization->type === "direct") checked @endif> Direct</label>
                                <label><input type="radio" id="general" name="type" @if($specialization->type === "general") checked @endif> General</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Description</label></div>
                            <div class="col-md-6">
                                <textarea id="specialization_add" name="description">{{$specialization->description}}</textarea>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" id="specialization_id" value="{{$specialization->id}}">
                    <button class="btn btn-primary float-right" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection