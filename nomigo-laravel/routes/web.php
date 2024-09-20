<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\TipoNivelRiesgoController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('empleados', EmpleadoController::class);
Route::get('/empleados/create', [EmpleadoController::class, 'create'])->name('empleados.create');
Route::resource('roles', RolController::class);
Route::resource('empresas', EmpresaController::class);
Route::resource('tipos_nivel_riesgo', TipoNivelRiesgoController::class);

