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

Auth::routes();

// Admin Pages
Route::get('/admin', 'AdminController@index')->middleware('admin');
Route::get('/doctors/{id}', 'DoctorProfileController@index')->middleware('admin');
Route::get('/patients_list/{doctor_id}', 'ShowPatientsController@show')->middleware('admin');
Route::get('/patients_list/prescription/{patient_id}/{doctor_id}', 'PrescriptionController@index')->middleware('admin');
Route::post('/write_prescription/{patient_id}/{doctor_id}', 'PrescriptionController@create')->middleware('admin');
Route::post('/store_prescription/{patient_id}/{doctor_id}', 'PrescriptionController@insert')->middleware('admin');
Route::get('/demo/{id}', 'AppoinmentController@delete')->name('deletePatient');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/reports/{id}', 'ReportsController@index')->name('report');
Route::get('/prescription/{patient_id}', 'PrescriptionController@index')->name('prescription');
Route::get('/appoinment/{user_id}/{doctors_id}','AppoinmentController@create');
Route::get('/showPrescription/{id}','PrescriptionController@show');
