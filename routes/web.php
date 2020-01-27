<?php

Route::get('/', function () {
    return view('welcome');
})->name('home');

//Route::get('/auth-user/{$abc}', function ($idUser) {
//
//    dd($idUser);
//
//    Auth::loginUsingId($idUser);
//
//})->name('aut');

Route::get('/tt', 'Site\UserController@tt')->name('tt');


//Сайт
Route::group([
    'prefix' => '/',
    'middleware' => ['web', 'auth'],
], function () {

    Route::get('/profile', 'Site\UserController@profile')->name('profile');
    Route::post('/profile', 'Site\UserController@avatar')->name('avatar');

    Route::get('/statistic', 'Site\UserController@stat')->name('statistic');

    Route::get('/test-multiplication', 'Site\TestController@index')->name('test-mult');
    Route::post('/test-multiplication', 'Site\TestController@store')->name('multiplication');
    Route::get('/report-test-multiplication', 'Site\TestController@report')->name('report-mult');
    Route::get('/tablica', 'Site\TestController@tablica')->name('tablica');

    //AJAX
    Route::get('/ajax-multiplication', 'Site\AjaxController@index')->name('ajax-mult');
    Route::post('/ajax-multiplication', 'Site\AjaxController@store')->name('ajax-multiplication');
    Route::post('/ajax-report', 'Site\AjaxController@report')->name('ajax-report-mult');

});


//Админка
Route::group([
    'prefix' => 'admin',
    'middleware' => ['web', 'auth'],
], function () {

    //Путь: /admin
    Route::get('/', ['uses' => 'Admin\AdminController@index', 'as' => 'dashboard']);

    Route::resource('user', 'Admin\UsersController');

    Route::post('/xxx', 'Site\UserController@xxx')->name('xxx');


});



Auth::routes();

