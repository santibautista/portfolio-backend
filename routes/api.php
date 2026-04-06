<?php
use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;

Route::post('/contacto', [ContactoController::class, 'store']);

