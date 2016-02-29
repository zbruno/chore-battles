<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

foreach (File::allFiles(__DIR__.'/Routes') as $partial) {
    require $partial->getPathName();
}

Route::group(['middleware' => 'web'], function () {
    Route::auth();
});