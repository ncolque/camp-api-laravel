<?php

use App\Http\Controllers\Api\AlumnoController;
use App\Http\Controllers\Api\EmpresaController;
use App\Http\Controllers\Api\PagoController;
use App\Http\Controllers\Api\PrecioController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::post('register',  [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);
Route::middleware(['auth:sanctum'])->group(function () {
    Route::apiResource('/precios', PrecioController::class);
    Route::apiResource('/empresas', EmpresaController::class);
    Route::apiResource('/alumnos', AlumnoController::class);
    Route::apiResource('/pagos', PagoController::class);
    Route::post('logout', [UserController::class, 'logout']);
});
