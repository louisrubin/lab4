<?php

use App\Http\Controllers\mensajeController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calculate', [mensajeController::class , 'showView'])->name('calculate.form');
Route::post('/calculate', [mensajeController::class , 'calcular'])->name('calculate.function'); // nombre de la ruta

