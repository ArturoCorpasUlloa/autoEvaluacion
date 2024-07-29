<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
//controladores creados para el aplicativo:
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\FactorController;
use App\Http\Controllers\CaracteristicaController;
use App\Http\Controllers\AspectoController;
use App\Http\Controllers\ModeloEvaluacionController;
use App\Http\Controllers\ModeloAspectoController;
use App\Http\Controllers\OrigenInstitucionalController;
use App\Http\Controllers\EvidenciaController;
use App\Http\Controllers\DocenteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //Rutas Creadas para la aplicacion
    Route::resource('dashboard/programa', ProgramaController::class);
    Route::resource('dashboard/factor', FactorController::class);
    Route::resource('dashboard/caracteristica', CaracteristicaController::class);
    Route::resource('dashboard/aspecto', AspectoController::class);
    Route::resource('dashboard/modelo_evaluacion', ModeloEvaluacionController::class);
    Route::resource('dashboard/modelos_aspecto', ModeloAspectoController::class);
    Route::resource('dashboard/evidencia', EvidenciaController::class);
    Route::resource('dashboard/docente', DocenteController::class);
    Route::resource('dashboard/origen', OrigenInstitucionalController::class);
});

require __DIR__.'/auth.php';
