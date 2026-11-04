<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        return view('pendaftaran', [
            'dataStruk' => null
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'whatsapp' => 'required|string|max:20',
            'merek' => 'required|string|max:100',
            'paket' => 'required|in:Deep Cleaning,Fast Cleaning,Unyellowing,Repaint',
            'catatan' => 'nullable|string|max:500',
        ]);

        $layanan = [
            'Deep Cleaning' => [
                'harga' => 'Rp50.000',
                'estimasi' => '2 - 3 Hari'
            ],
            'Fast Cleaning' => [
                'harga' => 'Rp35.000',
                'estimasi' => '1 Hari'
            ],
            'Unyellowing' => [
                'harga' => 'Rp75.000',
                'estimasi' => '3 - 4 Hari'
            ],
            'Repaint' => [
                'harga' => 'Rp120.000',
                'estimasi' => '4 - 5 Hari'
            ],
        ];

        $dataStruk = [
            'nama' => $validated['nama'],
            'whatsapp' => $validated['whatsapp'],
            'merek' => $validated['merek'],
            'paket' => $validated['paket'],
            'catatan' => $validated['catatan'] ?? 'Tidak ada catatan',
            'harga' => $layanan[$validated['paket']]['harga'],
            'estimasi' => $layanan[$validated['paket']]['estimasi'],
            'resi' => 'CS-' . date('ymd') . '-' . rand(100, 999),
        ];

        return view('pendaftaran', compact('dataStruk'));
    }
}