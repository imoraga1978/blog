<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;  //se debe agregar para usar el nuevo controlador
use App\Http\Controllers\CursoController;  //se debe agregar para usar el nuevo controlador
use Illuminate\Routing\RouteGroup;

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

Route::get('/', HomeController::class); 
//se usa el controlador HomeController y el metodo por defecto__invoke.

Route::controller(CursoController::class)->group(function(){
    route::get('cursos', 'index');
    route::get('cursos/create', 'create');
    Route::get('cursos/{curso}', 'show');
      
});
