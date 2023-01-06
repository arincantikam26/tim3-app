<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PreferensiController;
use App\Http\Controllers\UserCrudController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


// Route::get('/error', function () {
//     return view('errors.check-permission', [
//         'title' => 'Home',
//         'active' => 'home'
//     ]);
// });



Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/', [HomeController::class, 'home']);
Route::get('/home/prodi', [HomeController::class, 'prodi'])->name('prodi');
Route::get('/home/jurusan', [HomeController::class, 'jurusan'])->name('jurusan');
Route::get('/logout',  [LogoutController::class, 'perform'])->name('logout.perform')->middleware('auth');

Route::group(['middleware' => ['guest']], function () {
    Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
    Route::post('/register', [RegisterController::class, 'register'])->name('register-request');
    Route::get('/login', [LoginController::class, 'show'])->name('login.show');
    Route::post('/login',  [LoginController::class, 'login'])->name('login-request');
});

Route::group(['middleware' => 'check-permission:user'], function () {
    Route::get('/dashboard/user', [UserController::class, 'dashboard'])->name('dashboard-user');
    Route::get('/rekomendasi', [UserController::class, 'rekomendasi'])->name('rekomendasi');
});

Route::group(['middleware' => 'check-permission:admin'], function () {
    Route::get('/dashboard/admin', [AdminController::class, 'dashboard'])->name('dashboard-admin');
    Route::get('/admin/jurusan', [AdminController::class, 'jurusan'])->name('admin-jurusan');
    Route::get('/admin/prodi', [AdminController::class, 'prodi'])->name('admin-prodi');
    Route::resource('prodi', ProdiController::class);
    Route::resource('jurusan', JurusanController::class);
    Route::get('/admin/jurusan-sekolah', [AdminController::class, 'sekolah'])->name('admin-sekolah');
    Route::get('/admin/kriteria', [AdminController::class, 'kriteria'])->name('admin-kriteria');
    Route::get('/admin/pertanyaan', [AdminController::class, 'pertanyaan'])->name('admin-pertanyaan');
    Route::resource('admin-user', UserCrudController::class);
});