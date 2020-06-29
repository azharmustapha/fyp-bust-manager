<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/driver', 'DriverController@index')->name('driver');
Route::get('/attendance', 'AttendanceController@index')->name('attendance');
Route::get('/student', 'StudentController@index');
Route::get('/report', 'ReportController@index');
Route::get('/driverlist', 'DriverListController@index');


//insert data driver
Route::get('insert','DriverController@insertform');
Route::post('create','DriverController@insert'); 

//qrcode
Route::get('qrcode/{id}', 'StudentController@make');

//search
Route::get('/searchs', 'StudentController@search');
Route::get('/searchh', 'AttendanceController@search');
Route::get('/search', 'DriverListController@search');

//delete
Route::get('deletee/{id}', 'StudentController@delete');
Route::get('delete/{id}', 'DriverListController@delete');

//update
Route::get('edit/{id}', 'DriverController@edit');




