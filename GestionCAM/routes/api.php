<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DojoController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\FuncionalidadController;
use App\Http\Controllers\GradoController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\CuotaController;
use App\Http\Controllers\PagaController;

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

// Rutas para usuarios
Route::apiResource('usuarios', UserController::class);

// Rutas para roles
Route::apiResource('roles', RoleController::class);

// Rutas para dojos
Route::apiResource('dojos', DojoController::class);

// Rutas para alumnos
Route::apiResource('alumnos', AlumnoController::class);

// Rutas para funcionalidades
Route::apiResource('funcionalidades', FuncionalidadController::class);

// Rutas para grados
Route::apiResource('grados', GradoController::class);

// Rutas para permisos
Route::apiResource('permisos', PermisoController::class);

// Rutas para cuotas
Route::apiResource('cuotas', CuotaController::class);

// Rutas para pagas
Route::apiResource('pagas', PagaController::class);