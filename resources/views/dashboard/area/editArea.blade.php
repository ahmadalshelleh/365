@extends('layouts.dashboardApp')

@section('title', 'Edit Area')

@section('header')
    <script src="/js/dashboard/area.js"></script>
@endsection

@section('content')
    <div class="main-div-content">
        <div class="row">
            <div class="col-md-6 main-div-content-left">Edit area</div>
            <div class="col-md-6 main-div-content-right"><a href="/admin/dashboard">Dashboard</a> / Edit area</div>
        </div>
    </div>
    <br />
    <div class="body-pages">
        <form id="edit_area_form">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Name (AR)</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="edit_area_nameAR" value="{{$area->nameAR}}" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Name (EN)</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="edit_area_nameEN" value="{{$area->nameEN}}" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">City</label></div>
                            <div class="col-md-6">
                                <select required="" class="form-control" id="edit_city_id">
                                    @foreach($cities as $cit)
                                        @if($cit->id === $city->id)
                                            <option value="{{$cit->id}}" selected>{{$cit->nameEN}}</option>
                                        @else
                                            <option value="{{$cit->id}}">{{$cit->nameEN}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" value="{{$area->id}}" id="edit_area_id"/>
                    <button class="btn btn-primary float-right">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection