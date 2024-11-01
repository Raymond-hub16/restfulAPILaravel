<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index'])->name('posts.index'); // Show all posts
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create'); // Show create form
Route::post('/posts', [PostController::class, 'store'])->name('posts.store'); // Handle form submission for new post
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit'); // Show edit form
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update'); // Handle form submission for updating post
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy'); // Handle delete
