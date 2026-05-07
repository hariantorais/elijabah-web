<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

// Route::inertia('/', 'welcome', [
//     'canRegister' => Features::enabled(Features::registration()),
// ])->name('home');

Route::get('/', function () {
    return view('welcome');
})->name('home');   

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});



for ($i = 1; $i <= 12; $i++) {
    Route::get('/demo-travel-' . ($i), function () use ($i) {
        return view('travel.demo-travel-' . ($i));
    })->name('demo-travel-' . ($i));
}

for ($i = 1; $i <= 9; $i++) {
    Route::get('/demo-umkm-' . ($i), function () use ($i) {
        return view('umkm.demo-umkm-' . ($i));
    })->name('demo-umkm-' . ($i));
}

for ($i = 1; $i <= 6; $i++) {
    Route::get('/demo-education-' . ($i), function () use ($i) {
        return view('education.demo-education-' . ($i));
    })->name('demo-education-' . ($i));
}

require __DIR__ . '/settings.php';
