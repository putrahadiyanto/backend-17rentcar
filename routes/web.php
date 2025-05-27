<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\CarAdminController;
use App\Http\Controllers\Api\PaketTransportasiController;
use Illuminate\Support\Facades\Log;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Authentication routes (using web sessions)
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::middleware(['auth:sanctum', 'is_admin'])->prefix('/api/admin')->group(function () {
    Route::get('/cars', [CarAdminController::class, 'index']);
    Route::post('/cars', [CarAdminController::class, 'store']);
    Route::get('/cars/{car}', [CarAdminController::class, 'show']);
    Route::put('/cars/{car}', [CarAdminController::class, 'update']);
    Route::patch('/cars/{car}', [CarAdminController::class, 'update']);
    Route::delete('/cars/{car}', [CarAdminController::class, 'destroy']);

    // PaketTransportasi endpoints
    Route::get('/paket-transportasi', [PaketTransportasiController::class, 'index']);
    Route::post('/paket-transportasi', [PaketTransportasiController::class, 'store']);
    Route::get('/paket-transportasi/{id}', [PaketTransportasiController::class, 'show']);
    Route::put('/paket-transportasi/{id}', [PaketTransportasiController::class, 'update']);
    Route::patch('/paket-transportasi/{id}', [PaketTransportasiController::class, 'update']);
    Route::delete('/paket-transportasi/{id}', [PaketTransportasiController::class, 'destroy']);
});
