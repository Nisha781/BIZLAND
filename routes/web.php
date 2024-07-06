<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\loadingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TabController;
use Illuminate\Support\Facades\Route;

//Route::get('/loading', function () {
//return view('loading.index');
//});
Route::get('/loading', [loadingController::class, 'index'])->name('loading.index');
Route::get('/', function () {
    return view('welcome');
});

//Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::resource('/website', DashboardController::class);
Route::resource('/tab', TabController::class);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
