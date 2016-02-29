<?php

Route::group(['namespace' => 'Dashboard', 'middleware' => ['web', 'auth']], function () {
    Route::get('battles', [
        'as' => 'dashboard.battles',
        'uses' => 'BattleController@index'
    ]);

    Route::post('battles', [
        'as' => 'dashboard.battles',
        'uses' => 'BattleController@create'
    ]);
});
