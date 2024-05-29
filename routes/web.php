<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Keanggotaan\Member as Member;
use App\Livewire\Pages\Keanggotaan\Group as Group;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::prefix('keanggotaan')->group(function () {
        Route::get('/member', Member::class)->name('keanggotaan/member');
        Route::get('/group', Group::class)->name('keanggotaan/group');
    });
    Route::get('/paket', Member::class)->name('paket');
    Route::get('/faktur', Member::class)->name('faktur');
    Route::get('/iuran', Member::class)->name('iuran');

    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


});
