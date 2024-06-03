<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fiilable = ['nama', 'group_id', 'tgl_masuk', 'tgl_keluar',
    'sembako', 'tabungan'];

    // Relasi dengan tabel `groups`
    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }

    // Relasi dengan tabel `paket`
    public function pakets()
    {
        return $this->hasMany(Paket::class, 'id_anggota');
    }

    // Relasi dengan tabel `iuran`
    public function iurans()
    {
        return $this->hasMany(Iuran::class, 'id_anggota');
    }
}
