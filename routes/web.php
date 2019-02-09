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
Route::prefix('facilitator')->group(function (){
    Route::get('/manage', 'FacilitatorController@index')->name('facilitator');
    Route::get('/add',function (){
        return view('admin/add_facilitator');
    });
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::post('/register_facilitator', 'FacilitatorController@store')->name('store');

Route::get('/logout', 'AdminController@logout')->name('logout');

//Facilitator Functionality
Route::get('/facilitator/home', 'FacilitatorController@home')->name('home');
Route::get('/facilitator/add_questions', 'FacilitatorController@questions')->name('add');
Route::get('/facilitator/current_questions', 'QuestionController@index');
Route::get('/facilitator/add_questions', 'QuestionController@add_questions');

Route::post('/add_questions', 'QuestionController@store')->name('store');
Route::get('/facilitator/programme', 'ProgrammeController@index');
Route::post('/add_programme','ProgrammeController@store' );


Route::resource('facilitator','FacilitatorController');
Route::resource('questions','QuestionController');
Route::resource('programme','ProgrammeController');
