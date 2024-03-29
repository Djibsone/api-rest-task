<?php

use App\Http\Controllers\Api\CompleteTaskController;
use App\Http\Controllers\Api\TaskController;
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

Route::prefix('tasks')->group(function() {
    Route::apiResource('/task', TaskController::class);
    Route::patch('{task}/complete', CompleteTaskController::class);
});

// Route::prefix('tasks')->controller(TaskController::class)->group(function() {
//     Route::apiResource('tasks', TaskController::class);
// });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
