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
Route::get('/admin', function (){
    return 'admin section';
})->middleware('can:see_admin_section');


Route::get('/', 'HomeController@index')->name('home');
Route::get('/reports/{id}', 'ReportsController@index')->name('report');
