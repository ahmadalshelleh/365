@extends('layouts.dashboardApp')

@section('title', 'Edit City')

@section('header')
    <script src="/js/dashboard/city.js"></script>
@endsection

@section('content')
    <div class="main-div-content">
        <div class="row">
            <div class="col-md-6 main-div-content-left">Edit city</div>
            <div class="col-md-6 main-div-content-right"><a href="/admin/dashboard">Dashboard</a> / Edit city</div>
        </div>
    </div>
    <br />
    <div class="body-pages">
        <form id="edit_city_form">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Name (AR)</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="edit_city_nameAR" value="{{$city->nameAR}}" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Name (EN)</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="edit_city_nameEN" value="{{$city->nameEN}}" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Country</label></div>
                            <div class="col-md-6">
                                <select required="" class="form-control" name="countryid" id="edit_country_id">
                                    @foreach($countries as $count)
                                        @if($count->id === $country->id)
                                            <option value="{{$count->id}}" selected>{{$count->nameEN}}</option>
                                        @else
                                            <option value="{{$count->id}}">{{$count->nameEN}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" value="{{$city->id}}" id="edit_city_id"/>
                    <button class="btn btn-primary float-right">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection