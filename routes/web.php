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
Route::group(['middleware' => 'localization'], function () {
    Route::get('home', 'HomeController@home')->name('home');
    Route::get('stylist', function () {
        return view('frontend.stylist.stylistpage');
    });
    Route::get('style', function () {
        return view('frontend.style.stylepage');
    });
    Auth::routes();
//    Route::get('/home', 'HomeController@index')
    Route::get('logout', function () {
        if (Auth::check()) {
            Auth::logout();
        }
        return view('frontend.home.homepage');
    });
    Route::get('profile', function () {
        return view('frontend.profile.user_profile');
    });
    Route::get('localization/{id}', 'HomeController@changeL')->name('localization');
});

