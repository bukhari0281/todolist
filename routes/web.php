<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
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

Route::middleware(['guest'])->group(function() {
    Route::get('/', [HomeController::class, 'index'] )->name('login');
    Route::post('/', [HomeController::class, 'login'] )->name('create-login');
});


// admin
Route::get('/home', function () {
        return redirect('/admin');
    });

Route::middleware(['auth'])->group(
    function () {
        Route::get('/admin', [DashboardController::class, 'index'] )->name('home');
        Route::get('/admin/operator', [DashboardController::class, 'operator'] )->middleware('userAkses:operator')->name('home');
        Route::get('/admin/keuangan', [DashboardController::class, 'keuangan'] )->middleware('userAkses:keuangan')->name('home');
        Route::get('/admin/marketing', [DashboardController::class, 'marketing'] )->middleware('userAkses:marketing')->name('home');
        Route::get('/logout', [HomeController::class, 'logout']);
    }
);




Route::get('post', [PostController::class, 'index'])->name('users.index');
Route::post('post', [PostController::class, 'store'])->name('users.store');
Route::get('posts/{post}', [PostController::class, 'show'])->name('users.show');
Route::match(['put', 'patch'], 'users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('posts/{user}', [PostController::class, 'destroy'])->name('users.destroy');

