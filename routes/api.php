<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ColaboradorController;

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


//empresa

Route::get('/empresas', [EmpresaController::class, 'index']);
Route::get('/empresa/{id}', [EmpresaController::class, 'show']);
Route::post('/nova-empresa', [EmpresaController::class, 'store']);

Route::get('/colaboradores', [ColaboradorController::class, 'index']);
Route::get('/colaborador/{id}', [ColaboradorController::class, 'show']);
Route::post('/novo-colaborador', [ColaboradorController::class, 'store']); 