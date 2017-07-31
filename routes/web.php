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
    return view('frontend.home.homepage');
});

Route::get('stylist', function() {
	return view('frontend.stylist.stylistpage');
});

Route::get('style', function() {
	return view('frontend.style.stylepage');
});

Route::get('profile', function() {
	return view('frontend.profile.user_profile');
});

Route::get('admin', function() {
    return view('frontend.admin.admin');
});
