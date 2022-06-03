<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\RateController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ItemRateController;
use App\Http\Controllers\WorkshopController;
use App\Http\Controllers\WorkshopRateController;
use App\Http\Controllers\AuthenticationController;

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

Route::post('/signup', [AuthenticationController::class, 'signup']);
Route::post('/signin', [AuthenticationController::class, 'signin']);
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function(Request $request) {
        return auth()->user();
    });
    Route::post('/signout', [AuthenticationController::class, 'signout']);
});

Route::prefix('workshops')->group( function(){
    Route::get('/', [WorkshopController::class, 'workshops']);
    Route::get('/{id}', [WorkshopController::class, 'workshop']);
    Route::get('/{id}/items', [WorkshopController::class, 'workshopItems']);
    Route::post('/create', [WorkshopController::class, 'create'])->middleware('auth:sanctum');
});

Route::prefix('items')->group( function(){
    Route::get('/', [ItemController::class, 'items']);
    Route::get('/{id}', [ItemController::class, 'item']);
    Route::post('/create', [ItemController::class, 'create'])->middleware('auth:sanctum');
});

Route::prefix('comment')->middleware('auth:sanctum')->group( function(){
    Route::post('/', [CommentController::class, 'create']);
    Route::delete('/', [CommentController::class, 'delete']);
});

Route::prefix('rate')->middleware('auth:sanctum')->group( function(){
    Route::post('/', [RateController::class, 'create']);
    Route::delete('/', [RateController::class, 'delete']);
});

Route::prefix('cities')->group( function(){
    Route::get('/', [CityController::class, 'cities']);
});
