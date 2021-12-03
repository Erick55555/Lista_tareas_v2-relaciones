<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tareasControlador;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [tareasControlador::class , "mostrar"])->name("ruta_tarea");

Route::get('/tarea', [tareasControlador::class , "mostrar_formulario"])->name("ruta_tarea_mostrar");

Route::get('/tarea/buscar', [tareasControlador::class , "mostrar_formulario_buscar"])->name("ruta_tarea_buscar");

Route::post('/tarea/buscar', [tareasControlador::class , "buscar"])->name("ruta_tarea_encontrado");

Route::post('/tarea', [tareasControlador::class , "anadir"])->name("ruta_tarea_anadir");

Route::delete('/task/{id}', [tareasControlador::class , "eliminar"]) ->name("ruta_tarea_eliminar");;