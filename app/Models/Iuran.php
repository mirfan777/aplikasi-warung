<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iuran extends Model
{
    use HasFactory;

    // Relasi dengan tabel `members`
    public function member()
    {
        return $this->belongsTo(Member::class, 'id_member');
    }
}
