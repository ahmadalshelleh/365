<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('/login', 'UserController@login');
Route::get('/logout', 'UserController@logout');


Route::group(['middleware' => ['RoleCheck']],function () {
    Route::post('/createspecialization', 'SpecializationController@create');
    Route::post('/updatespecialization', 'SpecializationController@update');
    Route::post('/deletespecialization', 'SpecializationController@delete');

    Route::post('/createpatient', 'PatientController@create');
    Route::post('/updatepatient', 'PatientController@update');
    Route::post('/deletepatient', 'PatientController@delete');

    Route::post('/createdoctor', 'DoctorController@create');
    Route::post('/updatedoctor', 'DoctorController@update');
    Route::post('/deletedoctor', 'DoctorController@delete');

    Route::get('/getClinicCities', 'ClinicController@getCities');
    Route::get('/getClinicAreas', 'ClinicController@getAreas');
    Route::post('/createclinic', 'ClinicController@create');
    Route::post('/updateclinic', 'ClinicController@update');
    Route::post('/deleteclinic', 'ClinicController@delete');
    
    Route::get('/getInsuranceCities', 'InsuranceController@getCities');
    Route::get('/getInsuranceAreas', 'InsuranceController@getAreas');
    Route::post('/createinsurance', 'InsuranceController@create');
    Route::post('/updateinsurance', 'InsuranceController@update');
    Route::post('/deleteinsurance', 'InsuranceController@delete');

    Route::post('/createduration', 'DurationController@create');
    Route::post('/updateduration', 'DurationController@update');
    Route::post('/deleteduration', 'DurationController@delete');

    Route::post('/createcountry', 'CountryController@create');
    Route::post('/updatecountry', 'CountryController@update');
    Route::post('/deletecountry', 'CountryController@delete');

    Route::post('/createcity', 'CityController@create');
    Route::post('/updatecity', 'CityController@update');
    Route::post('/deletecity', 'CityController@delete');

    Route::post('/createarea', 'AreaController@create');
    Route::post('/updatearea', 'AreaController@update');
    Route::post('/deletearea', 'AreaController@delete');

    Route::post('/createdrug', 'DrugController@create');
    Route::post('/updatedrug', 'DrugController@update');
    Route::post('/deletedrug', 'DrugController@delete');

    Route::post('/createdrugIngredient', 'DrugIngredientController@create');
    Route::post('/updatedrugIngredient', 'DrugIngredientController@update');
    Route::post('/deletedrugIngredient', 'DrugIngredientController@delete');

    Route::post('/createpharmacy', 'PharmacyController@create');
    Route::post('/updatepharmacy', 'PharmacyController@update');
    Route::post('/deletepharmacy', 'PharmacyController@delete');

    Route::post('/createuser', 'UserController@create');
    Route::post('/updateuser', 'UserController@update');
    Route::post('/deleteuser', 'UserController@delete');
});

Route::group(['middleware' => ['DoctorRole']],function () {
    Route::post('/changeDoctorPassword', 'DoctorController@changePassword');
    Route::post('/updatedoctor', 'DoctorController@update');
});