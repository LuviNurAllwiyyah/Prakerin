<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('siswa', 'Api\SiswaController');
Route::resource('kategori1', 'Kategori1Controller');
Route::resource('tag1', 'Api\tag1Controller');
Route::resource('artikel1', 'Api\Artikel1Controller');
