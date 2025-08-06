<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rota para gerar roteiro:
Route::post('/generate-travel', [TravelController::class, 'generateTravel']);
