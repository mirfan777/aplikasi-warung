<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatuanBarang extends Model
{
    use HasFactory;

     // Relasi dengan tabel `barang`
     public function barang()
     {
         return $this->hasMany(Barang::class, 'satuan');
     }
}
