<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// 🟢 AUTH
Route::prefix('auth')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout']);
});


// 🔒 Rutas protegidas
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [AuthController::class, 'user']);
    Route::post('/logout', [AuthController::class, 'logout']);

    // 🛒 Pedidos
    Route::apiResource('pedidos', PedidoController::class)->only(['index', 'store', 'show']);

    // ⭐ Reseñas
    Route::apiResource('resenas', ResenaController::class)->only(['store', 'update', 'destroy']);
});
