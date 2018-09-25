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
// users
Route::get('/library', 'ConditionController@index');
Route::get('/library', 'ConditionController@show');
// admin only
Route::get('/library', 'ConditionController@create');
Route::post('/library', 'ConditionController@store');
Route::post('/library', 'ConditionController@edit');
Route::get('/library', 'ConditionController@update');
Route::get('/library', 'ConditionController@destroy');


//Emergency Routes
Route::get('/112', 'EmergencyController@show');

//Profile Routes
Route::get('/profile', 'ProfileController@show');
Route::post('/updateBasic', 'ProfileController@basicUpdate');
Route::post('/updateMedical', 'ProfileController@medicalUpdate');

//Symptoms Assessment routes
Route::get('/dydx', 'SymptomAssessmentController@index');
Route::post('/dydx', 'SymptomAssessmentController@diagnosis');

//Route::get('/diagnosis', 'SymptomAssessmentController@diagnosis');
Route::get('/diagnosis', 'SymptomAssessmentController@diagnosis');
Route::post('/diagnosis', 'SymptomAssessmentController@diagnosis');

/**
 * Domain Expert Routes
 * domain expert panel
 * admin only  
 */
Route::get('/expertCreate', 'KnowledgeController@create');

Route::get('/expertCreate', 'KnowledgeController@create');//create form
Route::post('/expertCreate', 'KnowledgeController@store');

Route::get('/expertEdit', 'KnowledgeController@edit');//edit form
Route::post('/expertEdit', 'KnowledgeController@update');//update request
Route::post('/expertDelete', 'KnowledgeController@destroy');//delete request



//Expert System Engineer View
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->middleware('auth');

//domain expert panel


//dissease to kb
//xpert to expert
