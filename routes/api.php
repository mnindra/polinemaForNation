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

Route::get('/buku', 'Api\BukuController@index');
Route::get('/buku/{id}', 'Api\BukuController@show');
Route::get('/kategori', 'Api\KategoriController@index');
Route::get('/pengaturan', 'Api\PengaturanController@index');
Route::post('/pemesanan', 'Api\PemesananController@store');