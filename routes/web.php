<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstitutoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/instituto/pdf/{instituto}', [InstitutoController::class, 'generarPdf'])->name('instituto.pdf');
