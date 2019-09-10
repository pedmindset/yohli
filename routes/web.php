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

Route::get('new-jobs', function () {
    return view('dashboard.jobs.new_jobs');
})->name('new-jobs');

Route::get('ongoing-jobs', function () {
    return view('dashboard.jobs.ongoing_jobs');
})->name('ongoing-jobs');

Route::get('bidders/{id}', function () {
    return view('dashboard.bidders');
})->name('bidders');

Route::get('my-bids', function () {
    return view('dashboard.my_bids');
})->name('my-bids');

Route::get('messages', function () {
    return view('dashboard.messages');
})->name('messages');

Route::get('settings', function () {
    return view('dashboard.settings');
})->name('settings');

Route::get('milestones/{id}', function () {
    return view('dashboard.milestones');
})->name('milestones');


// Finances
Route::get('add-funds', function () {
    return view('dashboard.finances.add_funds');
})->name('add-funds');


Route::get('dashboard', 'DashboardController@index')->name('dashboard');

// Jobs
Route::get('browse-jobs', 'JobsController@index')->name('jobs.index');
Route::resource('jobs', 'JobsController')->except('index');

// Freelancers
Route::get('browse-freelancers', 'FreelancersController@index')->name('freelancers.index');
Route::resource('freelancers', 'FreelancersController')->except('index');


Route::namespace("Auth")->group(function () {
    Route::get('login/{provider}', 'LoginController@redirectToProvider');
    Route::get('login/{provider}/callback', 'LoginController@handleProviderCallback');
});
