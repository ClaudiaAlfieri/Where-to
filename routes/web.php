<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;

Route::get('/', function () {
    return view('welcome');
});

// Rota para gerar roteiro:
Route::post('/generate-travel', [TravelController::class, 'generateTravel']);
