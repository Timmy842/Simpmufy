<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// AUTH Routes
Route::prefix('auth')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/user', [AuthController::class, 'user'])
        ->middleware('auth:sanctum');
    Route::post('/logout', [AuthController::class, 'logout'])
        ->middleware('auth:sanctum');
});
