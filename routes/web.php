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
    return view('layouts.app');
});

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
});

Auth::routes();

//Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/facilitator/manage', 'FacilitatorController@index')->name('facilitator');
Route::post('/register_facilitator', 'FacilitatorController@store')->name('store');

Route::get('/logout', 'AdminController@logout')->name('logout');

// Route::get('/auth/layouts/login-headers', 'HomeController@login_headers')->name('login_headers');

Route::get('facilitator/add',function (){
    return view('admin/add_facilitator');
});


Route::resource('facilitator','FacilitatorController');
