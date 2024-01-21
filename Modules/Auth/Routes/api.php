<?php

use Illuminate\Support\Facades\Route;
use Modules\Auth\Http\Controllers\Api\LoginController;

/*
    |--------------------------------------------------------------------------
    | API Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register API routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | is assigned the "api" middleware group. Enjoy building your API!
    |
*/

Route::prefix('auth')->name('api.')->group(function () {
    Route::get('login', [LoginController::class, 'get'])->name('get');
});