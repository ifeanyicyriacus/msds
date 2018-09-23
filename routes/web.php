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



//Condition Library Routes
Route::get('/library', function () {
    return view('library');//create library controller to manage search
});

//Emergency Routes
Route::get('/112', function () {
    return view('112');
});

//Profile Routes
Route::get('/profile', 'ProfileController@show');
Route::post('/updateBasic', 'ProfileController@basicUpdate');
Route::post('/updateMedical', 'ProfileController@medicalUpdate');


//Symptoms Assessment routes
Route::get('/dydx', 'DiagnosisController@index');
Route::post('/dydx', 'DiagnosisController@diagnosis');

//Route::get('/diagnosis', 'DiagnosisController@diagnosis');
Route::get('/diagnosis', 'DiseaseController@diagnosis');
Route::post('/diagnosis', 'DiseaseController@diagnosis');


//Domain Expert Routes
Route::get('/expertCreate', 'DiseaseController@create');
Route::post('/expertCreate', 'DiseaseController@store');//create

Route::get('/expertEdit', 'DiseaseController@edit');
Route::post('/expertEdit', 'DiseaseController@update');//update

Route::post('/expertDelete', 'DiseaseController@destroy');



//Expert System Engineer View
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->middleware('auth');



//change database names
//dissease to kb
//xpert to expert
