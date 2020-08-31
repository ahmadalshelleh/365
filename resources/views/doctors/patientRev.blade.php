@extends('layouts.doctorsApp')

@section('title', 'Patients profile')

@section('content')
    <br />
    <br />

    <div class="container">

        <br />

        <div class="table-responsive">
            <table class="table table-bordered">

                <tbody>
                <tr>
                    <td>اسم المريض</td>
                    <td>test</td>
                </tr>
                <tr>
                    <td>صورة المريض</td>
                    <td><img src="/lion.jpg" class="profile-images"></td>
                </tr>
                <tr>
                    <td>
                        تقييم المريض (
                        من 5
                        )
                    </td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>تعليقات المريض</td>
                    <td>
                    </td>
                </tr>
                </tbody>
            </table>

        </div>

    </div>

    <br />
    <br />
    <br />

@endsection