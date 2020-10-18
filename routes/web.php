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

Route::group(['middleware' => ['permission:system-list']], function () {
    Route::resource('role','RoleController')->middleware('permission:role')->except('show', );
    Route::resource('user','UserController')->middleware('permission:user');
    Route::resource('permission','PermissionController')->middleware('permission:permission')->only(['index', 'store']);
});


Route::get('/home', 'HomeController@index')->name('home');
