<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'nama'
    ];

    // Relasi dengan tabel `members`
    public function members()
    {
        return $this->hasMany(Member::class, 'group_id');
    }

    
}
