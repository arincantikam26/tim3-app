<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('users.index', [
//         'title' => 'Home',
//         'active' => 'home'
//     ]);
// });

//LOGIN DAN REGISTER

/**
 * Register Routes
 */
Route::get('/register', [RegisterController::class, 'show'])->name('register-show');
Route::post('/register/post', [RegisterController::class, 'register'])->name('register.request');
// Route::get('/verify-email', [RegisterController::class, 'verifyEmail'])->name('verify-email');

/**
 * Login Routes
 */
Route::get('/login', [LoginController::class, 'index'])->name('login-index');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.request');

Route::get('/dashboard', [HomeController::class, 'index']);

Route::group(['middleware' => ['auth']], function () {
    /**
     * Logout Routes
     */
    Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.request');
});

Route::get('/', [UserController::class, 'index']);

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/admin/jurusan', [AdminController::class, 'jurusan']);
Route::get('/admin/prodi', [AdminController::class, 'prodi'])->name('prodi_index');
Route::get('/admin/jurusan-sekolah', [AdminController::class, 'sekolah']);
Route::get('/admin/kriteria', [AdminController::class, 'kriteria']);
Route::get('/admin/pertanyaan', [AdminController::class, 'pertanyaan']);
Route::get('/admin/user', [AdminController::class, 'user']);

Route::resource('prodi', ProdiController::class);
Route::resource('jurusan', JurusanController::class);

Route::get('/rekomendasi', function () {
    return view('users.rekomendasi', [
        'title' => 'rekomendasi'
    ]);
});