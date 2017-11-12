<?php
use Illuminate\Support\Facades\Route;
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

Route::group(['middleware' => 'auth_petugas'], function () {
  Route::get('/', 'BerandaController@index');
  Route::get('/logout', 'Auth\LoginController@logout');
});

Route::group(['middleware' => 'redirect_petugas'], function () {
  Route::get('/login', 'Auth\LoginController@showLoginForm');
  Route::post('/login', 'Auth\LoginController@login');
});