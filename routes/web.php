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
Route::group(['domain' => 'copiadoramoc.com'], function()
{
Route::get('/', function () {
    return view('welcome', ['url' => 'copiadoramoc.com']);
});
});

// Match a subdomain of my domain
Route::group(['domain' => '{subdomain}.copiadoramoc.com'], function()
{
    Route::any('/', function($subdomain)
    {
        return view('welcome', ['url' => $subdomain]);
    });
});



Route::get('foo', function () {
    return 'Hello World';
});

Route::get('/user', 'UsersController@index');

Route::get('/home', 'HomeController@index')->name('home');