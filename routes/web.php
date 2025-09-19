<?php

use App\Http\Controllers\DramaController;
use Illuminate\Support\Facades\Route;

// 投稿一覧表示/全てのカテゴリ表示
Route::get('/drama', [DramaController::class, 'index'])->name('drama.index');

// 投稿ページ表示
Route::get('/drama/create', [DramaController::class, 'create'])->name('drama.create');

// 国ごとのカテゴリ
Route::get('drama/category/{country}', [DramaController::class, 'category'])->name('drama.category');

// 投稿内容保存
Route::post('/drama', [DramaController::class, 'store'])->name('drama.store');

// 投稿編集
Route::get('/drama/{id}/edit', [DramaController::class, 'edit'])->name('drama.edit');

Route::put('/drama/{id}', [DramaController::class, 'update'])->name('drama.update');

// 投稿削除
Route::delete('/drama/{id}', [DramaController::class, 'destroy'])->name('drama.destroy');
