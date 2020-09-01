<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', function(){
    return view('auth.login');
});


Route::group(['middleware' => ['DoctorRole']],function () {
    Route::get('/doctors/dashboard', function () {
        return view('doctors.dashboard');
    });
    Route::get('/doctors/profiles', function () {
        return view('doctors.profiles');
    });
    Route::get('/doctors/profile/add', function () {
        return view('doctors.addProfile');
    });

    Route::get('/doctors/profile', function () {
        return view('doctors.profile');
    });

    Route::get('/doctors/patient', function () {
        return view('doctors.patient');
    });

    Route::get('/doctors/patient/files', function () {
        return view('doctors.patientFiles');
    });

    Route::get('/doctors/prescription', function () {
        return view('doctors.prescription');
    });

    Route::get('/doctors/patient/prescriptions', function () {
        return view('doctors.prescriptions');
    });

    Route::get('/doctors/dailynotice', function () {
        return view('doctors.notices');
    });

    Route::get('/doctors/patient/appointments', function () {
        return view('doctors.appointments');
    });

    Route::get('/doctors/reviews', function () {
        return view('doctors.reviews');
    });

    Route::get('/doctors/patient/review', function () {
        return view('doctors.patientRev');
    });

    Route::get('/doctors/appointments', function () {
        return view('doctors.appointments');
    });

    Route::get('/doctors/diaries', function () {
        return view('doctors.diaries');
    });

    Route::get('/doctors/prescriptions', function () {
        return view('doctors.doctorsPrescriptions');
    });

    Route::get('/doctors/resetPassword', function () {
        return view('doctors.resetPassword');
    });

    Route::get('/doctors/updateWorkingHours', function () {
        return view('doctors.workinghours');
    });

    Route::get('/doctors/updateProfile/{id}', 'DoctorController@editDoctorProfile');

    Route::get('/doctors/drugs', function () {
        return view('doctors.doctorsDrugs');
    });
});


//patient

Route::group(['middleware' => ['PatientRole']],function () {

    Route::get('/patients/dashboard', function () {
        return view('patients.dashboard');
    });

    Route::get('/patients/notifications', function () {
        return view('patients.notifications');
    });

    Route::get('/patient/doctor/profile', function () {
        return view('patients.patientDoctorProfile');
    });

    Route::get('/patients/appointments', function () {
        return view('patients.appointments');
    });

    Route::get('/patient/profile', function () {
        return view('patients.profile');
    });

    Route::get('/patient/changepassword', function () {
        return view('patients.changedpassword');
    });

    Route::get('/patients/prescriptions', function () {
        return view('patients.prescription');
    });

    Route::get('/patient/resources', function () {
        return view('patients.resource');
    });

    Route::get('/patient/doctor/appointment', function () {
        return view('patients.bookAppointment');
    });

    Route::get('/patient/doctors', function () {
        return view('patients.doctors');
    });

    Route::get('/patient/drugs', function () {
        return view('patients.drugs');
    });

});


//dashboard

Route::group(['middleware' => ['RoleCheck']],function () {

    Route::get('/admin/dashboard', function() {return view('dashboard.dashboard');});

    Route::get('/admin/orders', function() {
        return view('dashboard.orders.order');
    });

    Route::get('/admin/specialization', 'SpecializationController@show');
    Route::get('/admin/specialization/add', 'SpecializationController@addPage');
    Route::get('/admin/specialization/edit/{id}', 'SpecializationController@edit');

    Route::get('/admin/doctors', 'DoctorController@show');
    Route::get('/admin/doctors/add', 'DoctorController@addPage');
    Route::get('/admin/doctors/edit/{id}', 'DoctorController@edit');

    Route::get('/admin/patients', 'PatientController@show');
    Route::get('/admin/patients/add', 'PatientController@addPage');
    Route::get('/admin/patients/edit/{id}', 'PatientController@edit');

    Route::get('/admin/clinic', 'ClinicController@show');
    Route::get('/admin/clinic/add', 'ClinicController@addPage');
    Route::get('/admin/clinic/edit/{id}', 'ClinicController@edit');

    Route::get('/admin/insurance', 'InsuranceController@show');
    Route::get('/admin/insurance/add', 'InsuranceController@addPage');
    Route::get('/admin/insurance/edit/{id}', 'InsuranceController@edit');

    Route::get('/admin/duration', 'DurationController@show');
    Route::get('/admin/duration/add', function() {return view('dashboard.duration.addDuration');});
    Route::get('/admin/duration/edit/{id}', 'DurationController@edit');

    Route::get('/admin/country', 'CountryController@show');
    Route::get('/admin/country/add', function() {return view('dashboard.country.addCountry');});
    Route::get('/admin/country/edit/{id}', 'CountryController@edit');


    Route::get('/admin/city', 'CityController@show');
    Route::get('/admin/city/add', 'CityController@addPage');
    Route::get('/admin/city/edit/{id}', 'CityController@edit');


    Route::get('/admin/area', 'AreaController@show');
    Route::get('/admin/area/add', 'AreaController@addPage');
    Route::get('/admin/area/edit/{id}', 'AreaController@edit');


    Route::get('/admin/drug', 'DrugController@show');
    Route::get('/admin/drug/add', function() {return view('dashboard.drug.addDrug');});
    Route::get('/admin/drug/edit/{id}', 'DrugController@edit');

    Route::get('/admin/drug/ingredient', 'DrugIngredientController@show');
    Route::get('/admin/drug/ingredient/add', 'DrugIngredientController@addPage');
    Route::get('/admin/drug/ingredient/edit/{id}', 'DrugIngredientController@edit');


    Route::get('/admin/pharmacy', 'PharmacyController@show');
    Route::get('/admin/pharmacy/add', 'PharmacyController@addPage');
    Route::get('/admin/pharmacy/edit/{id}', 'PharmacyController@edit');


    Route::get('/admin/users', 'UserController@show');
    Route::get('/admin/user/add', 'UserController@addPage');
    Route::get('/admin/user/edit/{id}', 'UserController@edit');

});














