<?php

use App\Http\Controllers\User\IndexController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/list', [IndexController::class, 'list']);
Route::post('/list/with/order', [IndexController::class, 'listWithOrder']);
Route::post('/detail', [IndexController::class, 'detail']);
Route::post('/detail/with/order', [IndexController::class, 'detailWithOrder']);
