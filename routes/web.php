<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\KelolaData;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('kelola-data', KelolaData::class)
    ->middleware(['auth', 'verified'])
    ->name('kelola-data');

require __DIR__.'/auth.php';
