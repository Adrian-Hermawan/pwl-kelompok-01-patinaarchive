<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Antrean extends Model
{
    protected $fillable = [
        'kode_antrean',
        'nama_pelanggan',
        'no_hp',
        'layanan_id',
        'user_id',
        'pelanggan_id',
        'status',
        'tanggal_masuk',
        'tanggal_selesai',
    ];

    public function layanan(): BelongsTo
    {
        return $this->belongsTo(Layanan::class);
    }

    public function operator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function pelanggan(): BelongsTo
    {
        return $this->belongsTo(User::class, 'pelanggan_id');
    }
}