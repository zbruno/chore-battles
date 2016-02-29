<?php

Route::group([
    'namespace' => 'Guest',
], function() {
    Route::get('/', [
        'as'   => 'welcome',
        'uses' => 'WelcomeController@welcome'
    ]);
});