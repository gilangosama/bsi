<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OperationalScheduleController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/operational-schedule', [OperationalScheduleController::class, 'getSchedule']);

Route::get('/individu', function () {
    return view('layanan.individu');
});

Route::get('/bisnis', function () {
    return view('layanan.bisnis');
});
Route::get('/tarif', function () {
    return view('layanan.tarif');
});

Route::get('/kartu', function () {
    return view('layanan.kartu');
});

Route::get('/digital', function () {
    return view('layanan.digital');
});

require __DIR__.'/auth.php';
