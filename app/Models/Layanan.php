<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Layanan extends Model
{
    protected $fillable = [
        'nama_layanan',
        'harga',
        'estimasi_waktu',
        'deskripsi',
    ];

    public function antreans(): HasMany
    {
        return $this->hasMany(Antrean::class);
    }
}