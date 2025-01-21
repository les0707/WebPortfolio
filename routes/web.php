<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    return view('about');
});

Route::get('/about', [AboutController::class, 'index'])->name('about');
