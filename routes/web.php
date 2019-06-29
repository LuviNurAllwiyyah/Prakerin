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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about ', function () {
    return view('about ');
});

Route::get('/join', function () {
    return view('join');
});

Route::get('/advertisement', function () {
    return view('advertisement');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::group(
    ['prefix' => 'admin', 'middleware' => 'auth'],
    function () {
        Route::get('/', function () {
            return view('layouts.backend');
        });
        Route::resource('Kategori', 'KategoriController');
        Route::resource('Tag', 'TagController');
        Route::resource('Artikel', 'ArtikelController');
    }
);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout')->name('logout');
