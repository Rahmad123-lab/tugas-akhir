<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegisterController;

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

// Route untuk menampilkan halaman utama (biasanya beranda)
Route::get('/', function () {
    return view('frontend.index');
});

// Route untuk menampilkan halaman login dan menangani proses login
Route::get('/authentikasi/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/authentikasi/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
