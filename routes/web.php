<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;

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
        Route::get('/admin', [DashboardController::class, 'admin'] )->middleware('userAkses:ADMIN')->name('home');
        Route::get('/logout', [HomeController::class, 'logout']);
        Route::get('/admin/post', [PostController::class, 'index'])->name('post');
        Route::post('/admin/post-create', [PostController::class, 'index'])->name('post-create');
    }
);

Route::middleware(['auth'])->group(
    function () {
        Route::get('/user', [DashboardController::class, 'user'] )->middleware('userAkses:USER')->name('user');
        Route::get('/logout', [HomeController::class, 'logout']);
    }
);




Route::get('/login', function () {
    return view('pages.login.login');
});
