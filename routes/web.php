<?php

use App\Http\Controllers\DramaController;
use Illuminate\Support\Facades\Route;

// 投稿データ表示
Route::get('/drama', [DramaController::class, 'index'])->name('drama.index1');

// 投稿作成
Route::post('/drama/create', [DramaController::class, 'create'])->name('drama.create');

// 投稿削除
Route::delete('/drama/{id}', [DramaController::class, 'destroy'])->name('drama.destroy');
