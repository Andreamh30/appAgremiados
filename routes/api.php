<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\AgremiadosController;

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

Route::controller(UsuariosController::class)->group(function(){
    Route::post('newUsuario', 'newUsuario');
    //Route::get('categorias', 'getCategories');
    //Route::get('categoria/{id}', 'getCategoryById');
    //Route::delete('eliminarCategoria/{id}', 'deleteCategoryById');
});

Route::controller(AgremiadosController::class)->group(function(){
    Route::post('newAgremiado', 'newAgremiado');
    //Route::get('categorias', 'getCategories');
    //Route::get('categoria/{id}', 'getCategoryById');
    //Route::delete('eliminarCategoria/{id}', 'deleteCategoryById');
});
