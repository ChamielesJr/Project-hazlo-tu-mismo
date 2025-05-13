<?php

//importar los controladores
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ListaNegraController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\SubcategoriaController;
use App\Http\Controllers\RecetaController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\CasoController;
use App\Http\Controllers\ComentarioRevisionController;
use App\Http\Controllers\UsuarioRevisionController;
use App\Http\Controllers\RecetaRevisionController;

// Rutas API restfull para cada modelo
//al usar el metodo apiResource nos ayuda a crear
//API restful de manera limpia siguiendo las convenciones de laravel.
Route::apiResource('roles', RolController::class);
Route::apiResource('estados', EstadoController::class);
Route::apiResource('categorias', CategoriaController::class);
Route::apiResource('lista-negra', ListaNegraController::class);
Route::apiResource('personas', PersonaController::class);
Route::apiResource('usuarios', UsuarioController::class);
Route::apiResource('subcategorias', SubcategoriaController::class);
Route::apiResource('recetas', RecetaController::class);
Route::apiResource('comentarios', ComentarioController::class);
Route::apiResource('casos', CasoController::class);
Route::apiResource('comentarios-revision', ComentarioRevisionController::class);
Route::apiResource('usuarios-revision', UsuarioRevisionController::class);
Route::apiResource('recetas-revision', RecetaRevisionController::class);
