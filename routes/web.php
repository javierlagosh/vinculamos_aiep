<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutenticacionController;
use App\Http\Controllers\ParametrosController;
use App\Http\Controllers\ParticipacionController;
use App\Http\Controllers\PerfilesController;
use App\Http\Controllers\UnidadesController;

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

// inicio rutas ingreso al sistema
//Route::get('/', function () {
//    return view('auth.ingresar');
//});
Route::get('/', function () {
    return view('admin.parametros.ambitocontri');
});
Route::get('registrar', [AutenticacionController::class, 'registrar']);

Route::post('registrar', [AutenticationController::class, 'guardarRegistro'])->name('nuevo.registro');
Route::get('ingresar', [AutenticacionController::class, 'acceder'])->name('auth.ingresar');

//Route::get('/', [AutenticationController::class, 'ingresar'])->name('ingresar.formulario')->middleware('verificar.sesion');
//Route::get('ingresar', [AutenticationController::class, 'ingresar'])->name('ingresar.formulario')->middleware('verificar.sesion');
//Route::post('ingresar', [AutenticationController::class, 'validarIngreso'])->name('auth.ingresar');
//Route::get('salir', [AutenticationController::class, 'cerrarSesion'])->name('auth.cerrar');
// fin rutas ingreso al sistema


Route::middleware('verificar.admin')->group(function () {
    // TODO: Inicio rutas para gestionar usuarios
    Route::get('admin/panel_admin')->name('admin.index');
    // fin rutas para gestionar usuarios
    
    // TODO: Inicio rutas Parametros

    // fin rutas Parametros
});
