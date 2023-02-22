<?php

use App\Http\Controllers\Api\QuotesController;
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

Route::middleware([])
    ->prefix('quotes')
    ->as('quotes.')
    ->group(function () {
        Route::get('', QuotesController::class)->name('index');
    });
