<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function() {
    Route::prefix('auth')->group(function() {
        Route::post('/login', App\Http\Controllers\Api\LoginController::class);

        Route::group(['middleware' => 'auth:api'] ,function(){
            Route::get('user', function(Request $request) {
                return $request->user();
            })->name('user');

            Route::post('logout', App\Http\Controllers\Api\Logout::class);
            Route::apiResource('consultations', App\Http\Controllers\Api\ConsultationController::class);
            Route::apiResource('spots', App\Http\Controllers\Api\SpotController::class);
        });
    });
});
