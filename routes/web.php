<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/admin');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/admin', 'dashboard')->name('admin.list');
    Route::view('/members', 'dashboard')->name('member.list');
    Route::view('/non-members', 'dashboard')->name('non_member.list');
    Route::view('/episcopi', 'dashboard')->name('episcopi.list');
    Route::view('/manage-central-officials', 'dashboard')->name('manage.central_officials');
    Route::view('/manage-commissions', 'dashboard')->name('manage.commissions');
    Route::view('/manage-citoc', 'dashboard')->name('manage.citoc');
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
