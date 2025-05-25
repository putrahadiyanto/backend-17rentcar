<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CarController;
use App\Http\Controllers\Api\CarAdminController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Log;
use App\Models\Car;

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

// Auth routes moved to web.php for session support
// Auth routes for API
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);

// Public routes for index and show
Route::get('/cars', [CarController::class, 'index']);
Route::get('/cars/{car}', [CarController::class, 'show']);

// Protected routes for store, update, destroy
// Route::middleware(['auth:sanctum', 'is_admin'])->prefix('admin')->group(function () {
//     Route::get('/cars', [CarAdminController::class, 'index']);
//     Route::post('/cars', [CarAdminController::class, 'store']);
//     Route::get('/cars/{car}', [CarAdminController::class, 'show']);
//     Route::put('/cars/{car}', [CarAdminController::class, 'update']);
//     Route::patch('/cars/{car}', [CarAdminController::class, 'update']);
//     Route::delete('/cars/{car}', [CarAdminController::class, 'destroy']);
// });
