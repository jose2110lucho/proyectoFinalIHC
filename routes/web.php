<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\NotaVentaProductoController;
use App\Http\Controllers\FacturaProductoController;

use App\Http\Controllers\NotaVentaCombustibleController;

use App\Http\Controllers\InscripcionController;


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

/* Auth::routes(); */
/* Route::get('/', function () {
    return view('adminlte::page');
})->middleware('auth'); */

Route::get('',[InscripcionController::class, 'inscripcionVista'])->name('admin.home');


//-------------inscripcion------------------------//

Route::get('inscripcion',[InscripcionController::class, 'inscripcionVista'])->name('inscripcion');
Route::get('adicion',[InscripcionController::class, 'adicionVista'])->name('adicion');
Route::get('boleta',[InscripcionController::class, 'boletaVista'])->name('boleta');
















