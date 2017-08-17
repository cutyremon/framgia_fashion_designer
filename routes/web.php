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
    Route::get('/', 'HomeController@home')->name('home');
    Route::get('stylist', function () {
        return view('frontend.stylist.stylistpage');
    });
    Route::get('style', function () {
        return view('frontend.style.stylepage');
    });
    Auth::routes();

    Route::get('logout', function () {
        if (Auth::check()) {
            Auth::logout();
        }
        return view('frontend.home.homepage');
    });
    Route::get('profile', [ 'as' => 'profile', 'uses' => 'ProfileController@profile' ]);

    Route::get('localization/{id}', 'HomeController@changeL')->name('localization');
    Route::get('admin', function () {
        return view('frontend.admin.admin');
    });
    Route::get('admin', 'Frontend\AdminController@postAdmin')->name('admin');

    Route::post('postTopic', 'Frontend\TopicController@postTopic')->name('postTopic');
    Route::post('postStyle', 'Frontend\StyleController@postStyle')->name('postStyle');
    Route::post('postProduce', 'Frontend\ProduceController@postProduce')->name('postProduce');
});

Route::get('category/{pro}', [ 'as' => 'category', 'uses' => 'CategoryController@category' ]);

Route::post('search', ['as' => 'search', 'uses' => 'SearchController@allSearch']);


