<?php

Route::group(['namespace' => 'Dashboard', 'middleware' => ['web']], function () {
    Route::get('/home', [
        'as' => 'dashboard.home',
        'uses' => 'HomeController@index'
    ]);
});
