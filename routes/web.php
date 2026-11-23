<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerMatricula;
use App\Http\Controllers\ControllerEstudiantes;
use App\Http\Controllers\ControllerPagos;
use App\Http\Controllers\ControllerReportes;
use App\Http\Controllers\ControllerConfiguracion;

Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Route::get('/matricula', [ControllerMatricula::class, 'index'])->name('matricula.index');
Route::post('/matricula', [ControllerMatricula::class, 'store'])->name('matricula.store');
Route::get('/estudiantes', [ControllerEstudiantes::class, 'index'])->name('estudiante.index');

Route::get('/pagos', [ControllerPagos::class, 'index'])->name('pagos.index');
Route::get('/reportes', [ControllerReportes::class, 'index'])->name('reportes.index');

Route::get('/configuracion', [ControllerConfiguracion::class, 'index'])->name('configuracion.index');