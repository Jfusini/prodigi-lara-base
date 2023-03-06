<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientiController;
use App\Http\Controllers\OrdiniController;
use App\Http\Controllers\FattureController;

Route::get('/clienti', [ClientiController::class, 'clienti']);
Route::get('/ordini', [OrdiniController::class, 'ordini']);
Route::get('/fatture', [FattureController::class, 'fatture']);
