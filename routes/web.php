<?php

declare(strict_types=1);

use App\Http\Controllers\BlogPostController;
use App\Models\BlogPost;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('welcome', ['posts' => BlogPost::all()]));

Route::get('/post/{blogPost}', [BlogPostController::class, 'show'])->name('blogPost.show');

Route::middleware(['auth'])->group(function () {
    Route::get('/posts', [BlogPostController::class, 'index']);
    Route::get('/create', [BlogPostController::class, 'create']);
    Route::post('/store', [BlogPostController::class, 'store']);
    Route::delete('/destroy/{blogPost}', [BlogPostController::class, 'destroy'])->name('blogPost.destroy');
    Route::get('/edit/{blogPost}', [BlogPostController::class, 'edit'])->name('blogPost.edit');
    Route::put('/edit/{blogPost}', [BlogPostController::class, 'update'])->name('blogPost.update');
});
