<?php

use App\Http\Controllers\JurusanController;
use App\Http\Controllers\ProdiController;
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

Route::get('/', [UserController::class, 'index']);

Route::get('/admin', function () {
    return view('admin.index', [
        'title' => 'Home',
        'active' => 'admin'
    ]);
});

Route::get('/login', function () {
    return view('auth.login', [
        'title' => 'Login'
    ]);
});

Route::get('/register', function () {
    return view('auth.register', [
        'title' => 'Register'
    ]);
});

Route::resource('prodi', ProdiController::class);
Route::resource('jurusan', JurusanController::class);

Route::get('/rekomendasi', function () {
    return view('users.rekomendasi', [
        'title' => 'rekomendasi'
    ]);
});