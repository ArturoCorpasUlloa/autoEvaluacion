<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\FactorController;
use App\Http\Controllers\CaracteristicaController;
use App\Http\Controllers\AspectoController;
use App\Http\Controllers\ModeloEvaluacionController;
use App\Http\Controllers\ModeloAspectoController;
use App\Http\Controllers\OrigenInstitucionalController;
use App\Http\Controllers\EvidenciaController;
use App\Http\Controllers\DocenteController;

Route::resource('users', UserController::class);
Route::resource('programas', ProgramaController::class);
Route::resource('factores', FactorController::class);
Route::resource('caracteristicas', CaracteristicaController::class);
Route::resource('aspectos', AspectoController::class);
Route::resource('modelos_evaluacion', ModeloEvaluacionController::class);
Route::resource('modelos_aspectos', ModeloAspectoController::class);
Route::resource('evidencias', EvidenciaController::class);
Route::resource('docentes', DocenteController::class);
Route::resource('origenes', OrigenInstitucionalController::class);


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
