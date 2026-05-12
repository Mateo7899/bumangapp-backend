<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

use App\Http\Controllers\RouteController;

Route::get('/rutas', [RouteController::class, 'index']);

use App\Http\Controllers\AuthController;

// Nota que usamos Route::post en lugar de Route::get. 
// "POST" se usa cuando enviamos información privada (como contraseñas) para que no se vea en la URL.
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/update-password', [AuthController::class, 'updatePassword']);
Route::post('/upgrade-premium', [AuthController::class, 'upgradePremium']);