<?php

Route::group(['namespace' => 'Dashboard', 'middleware' => ['web', 'auth']], function () {
    Route::get('home', [
        'as' => 'dashboard.home',
        'uses' => 'HomeController@index'
    ]);
});
