<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutenticacionController;

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
    return view('admin.panel_admin');
});
Route::get('registrar', [AutenticacionController::class, 'registrar']);


Route::get('/ingresar', [AutenticacionController::class, 'ingresar'])->name('vista.login');
Route::post('registrar', [AutenticationController::class, 'guardarRegistro'])->name('nuevo.registro');

//Route::get('/', [AutenticationController::class, 'ingresar'])->name('ingresar.formulario')->middleware('verificar.sesion');
//Route::get('ingresar', [AutenticationController::class, 'ingresar'])->name('ingresar.formulario')->middleware('verificar.sesion');
//Route::post('ingresar', [AutenticationController::class, 'validarIngreso'])->name('auth.ingresar');
//Route::get('salir', [AutenticationController::class, 'cerrarSesion'])->name('auth.cerrar');
// fin rutas ingreso al sistema
