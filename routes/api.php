<?php

use App\Http\Controllers\Api\QuotesController;
use App\Http\Middleware\BasicAuth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware(BasicAuth::class)
    ->prefix('quotes')
    ->as('quotes.')
    ->group(function () {
        Route::get('', QuotesController::class)->name('index');
    });
