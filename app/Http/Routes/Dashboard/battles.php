<?php

Route::group(['namespace' => 'Dashboard', 'middleware' => ['web']], function () {
    Route::get('/battles', [
        'as' => 'dashboard.battles',
        'uses' => 'BattleController@index'
    ]);

    Route::post('/battles', [
        'as' => 'dashboard.battles',
        'uses' => 'BattleController@create'
    ]);
});
