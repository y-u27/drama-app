<?php

use App\Http\Controllers\DramaController;
use Illuminate\Support\Facades\Route;

Route::get('/drama', [DramaController::class, 'index'])->name('drama.index1');
