
<?php
//namespace MSDS\Http\Controllers;

use Illuminate\Http\Request;

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
Route::post('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

// beginning of dydx
Route::get('/dydx', 'ChatController@index');
Route::post('/dydx','ChatController@index');

Route::post('/chat', 'ChatController@create');
Route::get('/chat', 'ChatController@index');


// end of dydx

Route::post('/profile', function () {
    return view('profile');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/TC', function () {
    return view('TC');
});
Route::get('/library', function () {
    return view('library');//create library controllor to manage search
});
Route::get('/FAQ', function () {
    return view('FAQ');
});
Route::get('/911', function () {
    return view('911');
});

//Route::get('/diagnosis', 'DiagnosisController@diagnosis');
Route::get('/diagnosis', 'DiseaseController@diagnosis');
Route::post('/diagnosis', 'DiseaseController@diagnosis');



//Domain Expert View
Route::get('/xpertCreate', 'DiseaseController@create');
//Route::post('/xpertCreate', 'DiseaseController@store');
Route::post('/xpertCreate', 'DiseaseController@store');

//
Route::get('/xpertEdit', 'DiseaseController@edit');
//Route::post('/xpertEdit', 'DiseaseController@update');
//
//Route::post('/xdisease', 'DiseaseController@destroy');


//Expert System Engineer View


//test
Route::get('/whatsapp', function () {
    return view('whatsapp');
});

Route::get('/Dx', function () {
    return view('newDx');
});

Route::post('/Dx', 'DiseaseController@dx');
//Route::get('/search', 'DiseaseController@search');
