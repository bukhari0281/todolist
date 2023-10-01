<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\Admin\DashboardController;

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

Route::get('/', [HomeController::class, 'index'] )->name('home');

Route::prefix('admin')
    ->namespace('Admin')
    ->group(function() {
        Route::get('/', [DashboardController::class, 'index'])
        ->name('dashboard');
    });

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});

Route::get('post', [PostController::class, 'index'])->name('users.index');
Route::post('post', [PostController::class, 'store'])->name('users.store');
Route::get('posts/{post}', [PostController::class, 'show'])->name('users.show');
Route::match(['put', 'patch'], 'users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('posts/{user}', [PostController::class, 'destroy'])->name('users.destroy');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
