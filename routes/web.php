<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BooksController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [UsersController::class, 'dash_index'])->name('dashboard')->middleware('auth');

Route::get('/login', [UsersController::class, 'log_index'])->name('auth.login')->middleware('guest');
Route::post('/login', [UsersController::class, 'login']);
Route::post('/logout', [UsersController::class, 'logout'])->middleware('auth');

Route::get('/register', [UsersController::class, 'reg_index'])->name('auth.register');
Route::post('/register', [UsersController::class, 'create_reg']);

#book
Route::get('/dashboard/add/book', [BooksController::class, 'addBook'])->name('book.add');
Route::post('/dashboard/add/book', [BooksController::class, 'createBook']);