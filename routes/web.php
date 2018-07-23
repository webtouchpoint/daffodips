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

// Admin area
Route::get('admin', function () {
    return redirect('/admin/dashboard');
});


Route::middleware(['auth', 'admin', 'revalidate'])->prefix('admin')->namespace('Admin')->group(function () {
	// Admin Controller
	Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
});

// Pages
Route::get('/future-plan-and-thouths', 'PagesController@showFuturePlanAndThoughts')->name('futurePlanAndThoughts');
Route::get('/mission-statement', 'PagesController@showMissionStatement')->name('missionStatement');
Route::get('/vision-statement', 'PagesController@showVisionStatement')->name('visionStatement');
Route::get('/principals-desk', 'PagesController@showprincipalsDesk')->name('principalsDesk');
Route::get('/overview', 'PagesController@showOverview')->name('overview');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
