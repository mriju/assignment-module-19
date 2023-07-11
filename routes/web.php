<?php

use Illuminate\Support\Facades\Route;

// routes/web.php
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\CommentController;

// Blog post routes
Route::get('/blog-posts', [BlogPostController::class, 'index']);
Route::get('/blog-posts/{id}', [BlogPostController::class, 'show']);

// Comment routes
Route::get('/blog-posts/{id}/comments', [CommentController::class, 'index']);
Route::post('/blog-posts/{id}/comments', [CommentController::class, 'store']);
