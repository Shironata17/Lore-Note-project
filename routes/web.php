<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [UsersController::class, 'log_index'])->name('auth.login');

Route::get('/register', [UsersController::class, 'reg_index'])->name('auth.register');
Route::post('/register', [UsersController::class, 'create_reg']);