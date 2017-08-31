<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

*/
Route::group(['middleware' => 'localization'], function () {
    Route::get('home', 'HomeController@home')->name('home');

    Route::get('style', 'Frontend\StyleController@getStyle')->name('listStyle');
    Route::get('style/{topicStyle}', 'Frontend\StyleController@getTopicStyle')->name('stylePage');

    Auth::routes();

    Route::get('logout', 'LogoutController@logout')->name('logout');

    Route::get('user/profile', 'UserProfileController@profile')->name('profile');

    Route::get('localization/{id}', 'HomeController@changeL')->name('localization');
    Route::get('admin', 'Frontend\AdminController@index')->name('admin');

    Route::post('postTopic', 'Frontend\TopicController@postTopic')->name('postTopic');
    Route::post('postStyle', 'Frontend\StyleController@postStyle')->name('postStyle');
    Route::post('postProduce', 'Frontend\ProduceController@postProduce')->name('postProduce');
    Route::get('category/{pro}', 'CategoryController@category')->name('category');
    Route::post('search', 'SearchController@allSearch')->name('search');
    Route::get('searchCostume/{idCategory}', 'SearchController@searchCostume')->name('searchCostume');

    Route::post('/user/edit/upload', 'UserProfileController@showUploadAvatar')
        ->name('upload.avatar');
    Route::post('/user/edit', 'UserProfileController@editUserInformation')
        ->name('edit.profile');
    Route::post('/user/edit/password', 'UserProfileController@changePasswordUser')
        ->name('change.password');
    Route::get('/user/design', 'DesignCostumeController@designCostume')->name('user.design');
    Route::get('/produce/{idProduce}', 'AjaxController@ajaxProduce');
    Route::post('costume', 'DesignCostumeController@updateCostume')->name('costume');
    Route::get('topicStyle/{idTopic}', 'AjaxController@ajaxStyle');
    Route::get('comment/{styleId}', 'Frontend\StyleController@getCommentStyle')->name('showComment');
    Route::post('addcomment', 'Frontend\StyleController@postComment')->name('addComment');

});
