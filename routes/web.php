<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForgetController;
use App\Http\Controllers\RecoveryController;
use App\Http\Controllers\ReenterPasswordController;
use App\Http\Controllers\Layanan_DetailsController;

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

// Route::get('/', function () {
//     return view('landing_page');
// });

// Login
Route::controller(LoginController::class)->group(function() {
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'authenticate');
    Route::post('/logout', 'logout');
});

// Register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

// Lupa Password
Route::get('/forget', [ForgetController::class, 'index'])->name('forget');

// Recovery Code
Route::get('/recovery', [RecoveryController::class, 'index'])->name('recovery');

// New Password
Route::get('/reenter_password', [ReenterPasswordController::class, 'index'])->name('reenter_password');

// Landing Page
Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Kontak
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');

// About
Route::get('/about', [AboutController::class, 'index'])->name('about.index');

// Layanan
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan.index');

// Layanan Details
Route::get('/layanan/id', [Layanan_DetailsController::class, 'index'])->name('layanan_details.index');
