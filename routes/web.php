<?php

//Сайт
Route::group([
    'prefix' => '/',
    'middleware' => ['web']
], function() {

    //Путь: /
//    Route::get('/', ['uses' => 'Site\IndexController@index', 'as' => 'siteIndex']);
    Route::get('/', function () {
//    phpinfo();
//        dd(config('mysettings.users_img.width'));
        return view('welcome');
    })->name('home');

    Route::get('/profile', 'Site\UserController@profile')->name('profile');
    Route::post('/profile', 'Site\UserController@avatar')->name('avatar');

});


//Админка
Route::group([
    'prefix' => 'admin',
    'middleware' => ['web', 'auth']
], function() {

    //Путь: /admin
    Route::get('/', ['uses' => 'Admin\AdminController@index', 'as' => 'dashboard']);

    Route::resource('user', 'Admin\UsersController');

//    // Image
    Route::get('/images-all','Admin\FileController@index')->name('allfile');
    Route::get('/images-user/{id}','Admin\FileController@show')->name('showimages');
//
    Route::get('/image/upload','Admin\FileController@create')->name('formfile');
    Route::post('/image/upload','Admin\FileController@store')->name('uploadfile');
//
    Route::post('/image/dropzone','Admin\FileController@dropzone')->name('dropzone');
    // Delete image
    Route::delete('/file/{id}','Admin\FileController@destroy')->name('deletefile');

});

Auth::routes();

