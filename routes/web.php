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
    Route::get('style', 'Frontend\StyleController@getStyle')->name('getStyle');
    Route::get('topic/{topic_style}', 'Frontend\Topic_StyleController@getTopicStyle')->name('topic');

    Auth::routes();

    Route::get('logout', 'LogoutController@logout')->name('logout');

    Route::get('user/profile', 'UserProfileController@profile')->name('profile');

    Route::get('localization/{id}', 'HomeController@changeL')->name('localization');
    Route::get('admin', function () {
        return view('frontend.admin.admin');
    });
    Route::get('admin', 'Frontend\AdminController@postAdmin')->name('admin');

    Route::post('postTopic', 'Frontend\TopicController@postTopic')->name('postTopic');
    Route::post('postStyle', 'Frontend\StyleController@postStyle')->name('postStyle');
    Route::post('postProduce', 'Frontend\ProduceController@postProduce')->name('postProduce');
    Route::get('category/{pro}', 'CategoryController@category')->name('category');
    Route::post('search', 'SearchController@allSearch')->name('search');


});
Route::post('/user/edit/upload', 'UserProfileController@showUploadAvatar')
    ->name('upload.avatar');
Route::post('/user/edit', 'UserProfileController@editUserInformation')
    ->name('edit.profile');
Route::post('/user/edit/password', 'UserProfileController@changePasswordUser')
    ->name('change.password');

