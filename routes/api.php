<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ServicioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\TecnicoController;
use App\Http\Controllers\OrdenServicioController;
use App\Http\Controllers\PagoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// CRUD Servicios
Route::apiResource('servicios', ServicioController::class);

// CRUD Clientes
Route::apiResource('clientes', ClienteController::class);

// CRUD Técnicos
Route::apiResource('tecnicos', TecnicoController::class);

// CRUD Órdenes de servicio
Route::apiResource('orden-servicios', OrdenServicioController::class);

// CRUD Pagos
Route::apiResource('pagos', PagoController::class);
