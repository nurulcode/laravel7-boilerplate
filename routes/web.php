<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return redirect('/login');
});

Auth::routes();


Route::namespace('Layanan')->group( function () {

    Route::get('/rawat-jalan/pasien','RawatJalanController@pasien')->name('rawat-jalan.pasien');

    Route::resource('rawat-darurat','RawatDaruratController');
    Route::resource('rawat-jalan','RawatJalanController');
    Route::resource('rawat-inap','RawatInapController');
});

Route::resource('pasien','PasienController');
Route::get('pasien/{pasien}/detail', 'PasienController@edit_detail')->name('pasien.detail');

Route::namespace('Master')->group( function () {
    Route::get('/kelurahan/{id}','WilayahController@getKelurahan');
    Route::get('/kecamatan/{id}','WilayahController@getKecamatan');
    Route::get('/kabupaten/{id}','WilayahController@getKabupaten');
    Route::get('/provinsi','WilayahController@getProvinsi');
    Route::get('/suku/{suku?}','WilayahController@getSuku');
});



Route::prefix('system')->namespace('System')->group( function () {
    Route::resource('role','RoleController')
    ->middleware('permission:role')
    ->except('show', );

    Route::resource('user','UserController')
    ->middleware('permission:user');

    Route::resource('permission','PermissionController')
    ->middleware('permission:permission')
    ->only(['index', 'store']);
});




Route::get('/home', 'HomeController@index')->name('home');
