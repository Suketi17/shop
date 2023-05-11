<?php

use App\Http\Controllers\Admin\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\LoginController;


Route::get('/login', [LoginController::class, 'index']);
Route::post('/admin/users/login/store', [LoginController::class, 'store']) -> name('login');

Route::get('admin/main', [MainController::class, 'index']) -> name('admin');
