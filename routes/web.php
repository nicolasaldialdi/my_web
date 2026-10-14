<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusController;

// Route Daftar Semua Bus
Route::get('/buses', [BusController::class, 'index'])->name('buses.index');

// Route Detail Bus Berdasarkan ID (BARU)
Route::get('/buses/{id}', [BusController::class, 'show'])->name('buses.show');

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');