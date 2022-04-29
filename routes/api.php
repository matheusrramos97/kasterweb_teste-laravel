<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ClientesController;
use App\Http\Controllers\api\auth\LoginController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', [LoginController::class, 'register']);

Route::middleware('auth:sanctum')->get('/clientes', [ClientesController::class, 'index']);
Route::middleware('auth:sanctum')->post('/clientes', [ClientesController::class, 'store']);
Route::middleware('auth:sanctum')->get('/clientes/{id}', [ClientesController::class, 'show']);
Route::middleware('auth:sanctum')->put('/clientes/{id}', [ClientesController::class, 'update']);
Route::middleware('auth:sanctum')->delete('/clientes/{id}', [ClientesController::class, 'destroy']);

