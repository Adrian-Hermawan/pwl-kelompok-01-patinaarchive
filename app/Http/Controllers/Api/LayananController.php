<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LayananResource;
use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index(Request $request)
    {
        $perPage = min(
            max($request->integer('per_page', 10), 1),
            50
        );

        $layanans = Layanan::query()
            ->when($request->filled('q'), function ($query) use ($request) {
                $query->where(
                    'nama_layanan',
                    'like',
                    '%' . $request->q . '%'
                );
            })
            ->orderBy('nama_layanan')
            ->paginate($perPage);

        return LayananResource::collection($layanans);
    }
}