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
Route::get('/admin', ['middleware' => 'admin', function () {
    return view('admin.index');
}]);

Route::get('/doctors/{id}', 'DoctorProfileController@index');


Route::get('/', 'HomeController@index')->name('home');
Route::get('/reports/{id}', 'ReportsController@index')->name('report');

Route::get('/prescription', 'PrescriptionController@index')->name('prescription');
