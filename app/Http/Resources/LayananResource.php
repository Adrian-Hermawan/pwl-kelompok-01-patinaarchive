<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LayananResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nama_layanan' => $this->nama_layanan,
            'harga' => (float) $this->harga,
            'estimasi_waktu' => $this->estimasi_waktu,
            'deskripsi' => $this->deskripsi,
        ];
    }
}