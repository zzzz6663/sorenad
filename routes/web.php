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

Route::get('/clear', 'HomeController@clear')->name('clear');
Route::get('/', 'HomeController@index')->name('home');
Route::any('/code_check', 'HomeController@code_check')->name('code.check');
Route::any('/mobile_login', 'HomeController@mobile_login')->name('mobile.login');
Route::any('/register', 'HomeController@register')->name('register');
Route::get('/login', 'HomeController@login')->name('login');
Route::get('/logout', 'HomeController@logout')->name('logout');
Route::get('/clear', 'HomeController@clear')->name('clear');

Route::post('/check_login', 'AdminController@check_login')->name('admin.check.login');

Route::prefix('admin')->namespace('admin')->group(function () {
    Route::get('/login', 'AdminController@login')->name('admin.login');
    // Route::post('/check_login', 'AdminController@check_login')->name('admin.check.login');
});
Route::prefix('admin')->middleware(['auth'])->namespace('admin')->group(function () {
    Route::get('/active_region/{region}', 'RegionController@active_region')->name('active.region')->withTrashed();;
    Route::any('/visit_note/{visit}', 'VisitController@visit_note')->name('visit.note')->withTrashed();;
    Route::any('/look_note/{look}', 'LookController@look_note')->name('look.note')->withTrashed();;
    Route::resource('user', 'UserController')->middleware(['role:admin']);;;
    // Route::resource('account', 'AccountController');
    Route::resource('user', 'UserController')->middleware(['role:admin']);;;
    Route::resource('visit', 'VisitController')->middleware(['role:admin|inspector|observer']);;;
    Route::resource('look', 'LookController')->middleware(['role:admin|inspector|observer']);;;
});

// Route::middleware(['auth',"role:student"])->group(function () {
//     Route::get('/profile', 'StudentController@profile')->name('profile');
//     Route::get('/myCourse', 'StudentController@myCourse')->name('myCourse');
//     Route::get('/setting', 'StudentController@setting')->name('setting');
// });
