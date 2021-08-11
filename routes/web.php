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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'PagesController@index')->name('index');
Route::get('/home', 'PatientsController@index')->name('index');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/contact', 'PagesController@contact')->name('contact');
// Route::get('/test', 'TestsController@index')->name('test');
Route::resource('patients', 'PatientsController');
Route::resource('reports', 'ReportsController');
// Route::post('patients/report/{patient}/store', 'ReportsController@store');
// Route::get('patients/report/{patient}/create', 'ReportsController@create');
Route::get('reports/create/{patient_id}', 'ReportsController@create');
Route::get('reports/{patient_id}/{report_id}', 'ReportsController@show');
Route::resource('testProfile', 'TestProfileController');
Route::resource('test', 'TestsController');
Route::get('patients/create/check/', 'PatientsController@findPatientByMobile');