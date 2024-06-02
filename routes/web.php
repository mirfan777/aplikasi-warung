<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Keanggotaan\Member as Member;
use App\Livewire\Pages\Keanggotaan\Group\Group as Group;
use App\Livewire\Pages\Keanggotaan\Group\Create as GroupCreate;
use App\Livewire\Pages\Keanggotaan\Group\Update as GroupUpdate;
use App\Livewire\Pages\Keanggotaan\Group\Delete as GroupDelete;
use App\Livewire\Pages\Barang\Barang as Barang;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::prefix('keanggotaan')->group(function () {
        Route::get('/member', Member::class)->name('keanggotaan/member');
        Route::get('/group', Group::class)->name('keanggotaan/group');
        Route::get('/group/tambah', GroupCreate::class)->name('keanggotaan/group/tambah');
        Route::get('/group/{id}/edit', GroupUpdate::class)->name('keanggotaan/group/edit');
        Route::get('/group/{id}/delete', GroupDelete::class)->name('keanggotaan/group/delete');

    });
    Route::get('/paket', Member::class)->name('paket');
    Route::get('/barang', Barang::class)->name('barang'); 
    Route::get('/faktur', Member::class)->name('faktur');
    Route::get('/iuran', Member::class)->name('iuran');

    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


});
