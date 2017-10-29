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

Auth::routes();

// Match MinasMars domain
Route::group(['domain' => 'minasmars.com'], function () {
    Route::get('/', function () {
        return view('welcome', ['url' => 'minasmars.com']);
    });
});

// Match a subdomain of my domain
Route::group(['domain' => '{subdomain}.minasmars.com'], function () {
    Route::any('/', 'ClientController@index');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('foo', function () {
    return 'Hello World';
});

Route::get('/user', 'UsersController@index');
