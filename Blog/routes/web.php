<?php

use App\Http\Controllers\mensajeController;
use App\Http\Controllers\promedioController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calculate', [mensajeController::class , 'showView'])->name('calculate.form');
Route::post('/calculate', [mensajeController::class , 'calcular'])->name('calculate.function'); // nombre de la ruta

Route::get('/promedio', [promedioController::class , 'showView'])->name('promedio.view');
Route::post('/promedio', [promedioController::class , 'enviarCantMaterias'])->name('promedio.function');
Route::post('/promedio/calcular', [promedioController::class, 'calcularPromedio'])->name('promedio.calculando');

