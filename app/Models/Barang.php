<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    // Relasi dengan tabel `satuan_barang`
    public function satuanBarang()
    {
        return $this->belongsTo(SatuanBarang::class, 'satuan');
    }

    // Relasi dengan tabel `paket`
    public function paket()
    {
        return $this->hasMany(Paket::class, 'id_barang');
    }
}
