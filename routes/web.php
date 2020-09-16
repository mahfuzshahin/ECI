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

// change password
Route::get('/change-password', 'HomeController@changePassword')->name('change.password')->middleware('auth');
Route::post('/change', 'HomeController@change')->name('change')->middleware('auth'); 

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/login', 'AdminAuth\AdminLoginController@ShowLoginForm')->name('admin.login');
Route::post('/admin/login', 'AdminAuth\AdminLoginController@LoginActive')->name('admin.login.submit');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
Route::post('/admin/change-password', 'ChangePasswordController@ChangeAdminPassword')->name('admin.password.change');