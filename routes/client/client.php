<?php

use App\Http\Controllers\client\BlogPostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Auth::routes();

Route::get('/', [BlogPostController::class, 'index'])->name('home');

Route::get('/client/posts/{id}/show', [BlogPostController::class, 'show'])->name('client.post.show');

Route::get('/search', [BlogPostController::class, 'search'])->name('search');
