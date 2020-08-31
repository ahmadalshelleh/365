@extends('layouts.dashboardApp')

@section('title', 'Add Area')

@section('header')
    <script src="/js/dashboard/area.js"></script>
@endsection

@section('content')
    <div class="main-div-content">
        <div class="row">
            <div class="col-md-6 main-div-content-left">Add area</div>
            <div class="col-md-6 main-div-content-right"><a href="/admin/dashboard">Dashboard</a> / Add area</div>
        </div>
    </div>
    <br />
    <div class="body-pages">
        <form id="create_area_form">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Name (AR)</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="area_nameAR" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">Name (EN)</label></div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="area_nameEN" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><label for="name">City</label></div>
                            <div class="col-md-6">
                                <select required="" class="form-control" id="city_id">
                                    @foreach($cities as $city)
                                        <option value="{{$city->id}}">{{$city->nameEN}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary float-right">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection