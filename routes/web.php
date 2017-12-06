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

Route::get('/identification', function () {
    return view('identification');
});
Route::post('/identification', 'identification@submit');
Route::get('/identification/{taskHash}', 'identification@getResult');

//Route::get('/browser', function () {
//    return view('browser');
//});
Route::get('/browser','BrowseController@browse');

Route::post('/browser','browser@search');

Route::get('/download', function () {
    return view('download');
});

Route::get('/help', function () {
    return view('help');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/test', function () {
    // return view('contact');
    SSH::run('ls', function ($line) {
        echo $line . PHP_EOL;
    });
});
