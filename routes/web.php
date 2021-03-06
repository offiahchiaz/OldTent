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

// Route::get('/email', function () {
//     //Mail::to($request->user())->send(new MailableClass);
//     Mail::to('email@email.com')->send(new WelcomeMail());

//     return new WelcomeMail();
// });

Auth::routes();

// Admin Routes
Route::get('/admin-dashboard', 'Admin\DashboardController@index')->name('admin-dashboard');


// Members Routes
Route::get('/host-dashboard', 'Members\DashboardController@index')->name('member-dashboard');