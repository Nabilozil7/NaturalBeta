<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;

Route::post('/articles', [ArtikelController::class, 'store']);