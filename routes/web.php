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


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('login', function () {
    return view('auth.login');
})->name('login.page'); 

Route::get('register', function () {
    return view('auth.register');
})->name('register.page');

Route::get('how-it-works', function () {
    return view('how_it_works');
})->name('how-it-works');

Route::get('post-job', function () {
    return view('dashboard.post_job');
})->name('post-job');

Route::get('dashboard', 'DashboardController@index')->name('dashboard');


Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
