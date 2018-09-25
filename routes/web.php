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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Static pages routes
Route::get('/about', function () {
    return view('about');
});
Route::get('/TC', function () {
    return view('TC');
});
Route::get('/FAQ', function () {
    return view('FAQ');
});

////Condition Library Routes
Route::get('/library', 'ConditionController@index');//users
//Route::get('/library', 'ConditionController@show');//users
//Route::get('/library', 'ConditionController@create');//Domain Expert
//Route::post('/library', 'ConditionController@store');//Domain Expert
//Route::post('/library', 'ConditionController@edit');//Domain Expert
//Route::get('/library', 'ConditionController@update');//Domain Expert
//Route::get('/library', 'ConditionController@destroy');//Domain Expert

////Emergency Routes
Route::get('/112', 'EmergencyController@show');//users
//Route::get('/112', 'EmergencyController@create');//Domain Expert
//Route::get('/112', 'EmergencyController@store');//Domain Expert
//Route::get('/112', 'EmergencyController@edit');//Domain Expert
//Route::get('/112', 'EmergencyController@update');//Domain Expert
//Route::get('/112', 'EmergencyController@destroy');//Domain Expert


//Profile Routes
Route::get('/profile', 'ProfileController@show');//users only
Route::post('/updateBasic', 'ProfileController@basicUpdate');//users only
Route::post('/updateMedical', 'ProfileController@medicalUpdate');//users only

//Symptoms Assessment routes
Route::get('/dydx', 'SymptomAssessmentController@index');//users
Route::post('/dydx', 'SymptomAssessmentController@diagnosis');//users

////Domain Expert Routes
Route::get('/expertCreate', 'KnowledgeController@create');//create form
Route::post('/expertCreate', 'KnowledgeController@store');//insert request
Route::get('/expertEdit', 'KnowledgeController@edit');//edit form
Route::post('/expertEdit', 'KnowledgeController@update');//update request
Route::post('/expertDelete', 'KnowledgeController@destroy');//delete request

////Knowledge Engineer routes
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->middleware('auth');//system logs
Route::post('/admin', 'AdminController@index');//index page
Route::post('/adminUserUpdate', 'AdminController@updateUserRole');//UserUpdate