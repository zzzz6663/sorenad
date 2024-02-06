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
Route::any('/check_code', 'HomeController@check_code')->name('check.code');
Route::any('/mobile_login', 'HomeController@mobile_login')->name('mobile.login');
Route::any('/register', 'HomeController@register')->name('register');
Route::get('/login', 'HomeController@login')->name('login');
Route::get('/logout', 'HomeController@logout')->name('logout');
Route::get('/clear', 'HomeController@clear')->name('clear');
Route::get('/redirect', 'HomeController@redirect')->name('redirect');

Route::post('/check_login', 'HomeController@check_login')->name('check.login');

Route::prefix('admin')->middleware(['auth'])->namespace('admin')->group(function () {
    Route::get('/login', 'AdminController@login')->name('admin.login');
    Route::get('/admin_dashoard', 'AdminController@admin_dashoard')->name('admin.dashoard');
    Route::any('/setting_ads_app', 'SettingController@setting_ads_app')->name('setting.ads.app');
    Route::any('/setting_ads_banner', 'SettingController@setting_ads_banner')->name('setting.ads.banner');
    Route::any('/setting_ads_fixpost', 'SettingController@setting_ads_fixpost')->name('setting.ads.fixpost');
    Route::any('/setting_ads_popup', 'SettingController@setting_ads_popup')->name('setting.ads.popup');
    Route::any('/setting_ads_video', 'SettingController@setting_ads_video')->name('setting.ads.video');
    Route::any('/setting_ads_txt', 'SettingController@setting_ads_txt')->name('setting.ads.txt');
    Route::any('/site_setting', 'SettingController@site_setting')->name('site.setting');
    // Route::post('/check_login', 'AdminController@check_login')->name('admin.check.login');
    Route::resource('user', 'UserController')->middleware(['role:admin']);;;
});


Route::prefix('panel')->middleware(['auth'])->namespace('panel')->group(function () {
    Route::get('/login', 'AdminController@login')->name('admin.login');

});
// Route::prefix('admin')->middleware(['auth'])->namespace('admin')->group(function () {
//     Route::get('/active_region/{region}', 'RegionController@active_region')->name('active.region')->withTrashed();;
//     Route::any('/visit_note/{visit}', 'VisitController@visit_note')->name('visit.note')->withTrashed();;
//     Route::any('/look_note/{look}', 'LookController@look_note')->name('look.note')->withTrashed();;
//     Route::resource('user', 'UserController')->middleware(['role:admin']);;;
//     // Route::resource('account', 'AccountController');
//     Route::resource('user', 'UserController')->middleware(['role:admin']);;;
//     Route::resource('visit', 'VisitController')->middleware(['role:admin|inspector|observer']);;;
//     Route::resource('look', 'LookController')->middleware(['role:admin|inspector|observer']);;;
// });

// Route::middleware(['auth',"role:student"])->group(function () {
//     Route::get('/profile', 'StudentController@profile')->name('profile');
//     Route::get('/myCourse', 'StudentController@myCourse')->name('myCourse');
//     Route::get('/setting', 'StudentController@setting')->name('setting');
// });
