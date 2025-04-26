<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;

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
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Route untuk dashboard, pastikan Anda memiliki middleware auth jika perlu otentikasi
Route::middleware(['auth', 'checkRole:dokter,admin,pasien,apoteker'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard')-> middleware('auth');
});

// Route untuk halaman home setelah login
Route::middleware(['auth', 'checkRole:dokter,admin,pasien,apoteker'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
});
