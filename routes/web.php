<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerjadwal;
use App\Http\Controllers\controllerprofile;

// Route::get('/', function () {
//     return view(view: 'welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/profile', [controllerprofile::class, 'index'])->name('profile');

Route::get('/jadwal', [controllerjadwal::class, 'jadwal'])->name('jadwal');



