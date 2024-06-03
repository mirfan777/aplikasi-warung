<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Keanggotaan\Group\Group as Group;
use App\Livewire\Pages\Keanggotaan\Group\Create as GroupCreate;
use App\Livewire\Pages\Keanggotaan\Group\Update as GroupUpdate;
use App\Livewire\Pages\Keanggotaan\Group\Delete as GroupDelete;
use App\Livewire\Pages\Keanggotaan\Member\Member as Member;
use App\Livewire\Pages\Keanggotaan\Member\Create as MemberCreate;
use App\Livewire\Pages\Keanggotaan\Member\Update as MemberUpdate;
use App\Livewire\Pages\Keanggotaan\Member\Delete as MemberDelete;
use App\Livewire\Pages\Barang\Barang as Barang;
use App\Livewire\Pages\Paket\Paket as Paket;
use App\Livewire\Pages\Iuran\Iuran as Iuran;

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::prefix('keanggotaan')->group(function () {
        Route::get('/group', Group::class)->name('keanggotaan/group');
        Route::get('/group/tambah', GroupCreate::class)->name('keanggotaan/group/tambah');
        Route::get('/group/{id}/edit', GroupUpdate::class)->name('keanggotaan/group/edit');
        Route::get('/group/{id}/delete', GroupDelete::class)->name('keanggotaan/group/delete');
        Route::get('/member', Member::class)->name('keanggotaan/member');
        Route::get('/member/tambah', MemberCreate::class)->name('keanggotaan/member/tambah');
        Route::get('/member/{id}/edit', MemberUpdate::class)->name('keanggotaan/member/edit');
        Route::get('/member/{id}/delete', MemberDelete::class)->name('keanggotaan/member/delete');

    });
    Route::get('/paket', Paket::class)->name('paket');
    Route::get('/barang', Barang::class)->name('barang'); 
    Route::get('/iuran', Iuran::class)->name('iuran');

    
    Route::get('/dashboard', function () {
        return redirect('/keanggotaan/group');
    })->name('dashboard');


});
