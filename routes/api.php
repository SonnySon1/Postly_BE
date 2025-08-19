<?php

use App\Http\Controllers\Api\PostApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::prefix('article')->group(function () {
    Route::get('/{limit}/{offset}', [PostApiController::class, 'getAll']);
    Route::post('/', [PostApiController::class, 'store']);
    Route::get('/{id}', [PostApiController::class, 'show']);
    Route::put('/{id}', [PostApiController::class, 'update']);
    Route::delete('/{id}', [PostApiController::class, 'destroy']);
});
