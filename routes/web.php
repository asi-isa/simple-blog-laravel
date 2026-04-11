<?php

declare(strict_types=1);

use App\Http\Controllers\BlogPostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogPostController::class, 'index']);
