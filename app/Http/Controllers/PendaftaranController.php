<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Antrean;
use Illuminate\Support\Facades\DB;

class PendaftaranController extends Controller
{
    public function index()
    {
        $layanans = Layanan::orderBy('nama_layanan')->get();

        return view('pendaftaran', [
            'dataStruk' => null,
            'layanans' => $layanans
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'whatsapp' => 'required|string|max:20',
            'merek' => 'required|string|max:100',
            'layanan_id' => 'required|exists:layanans,id',
            'catatan' => 'nullable|string|max:500',
        ]);

        $antrean = DB::transaction(function () use ($validated) {

            // Membuat data antrean terlebih dahulu
            $antrean = Antrean::create([
                'kode_antrean' => 'TEMP-' . uniqid(),
                'nama_pelanggan' => $validated['nama'],
                'no_hp' => $validated['whatsapp'],
                'merek_sepatu' => $validated['merek'],
                'catatan' => $validated['catatan'] ?? null,
                'layanan_id' => $validated['layanan_id'],
                'status' => 'menunggu',
                'tanggal_masuk' => now(),
            ]);

            // Membuat nomor antrean berdasarkan tanggal dan ID database
            $kodeAntrean = 'PA-' . now()->format('ymd') . '-' .
                str_pad($antrean->id, 4, '0', STR_PAD_LEFT);

            $antrean->update([
                'kode_antrean' => $kodeAntrean
            ]);

            return $antrean;
        });

        $antrean->load('layanan');

        $menit = $antrean->layanan->estimasi_waktu;

        if ($menit >= 1440 && $menit % 1440 === 0) {
            $estimasi = ($menit / 1440) . ' Hari';
        } elseif ($menit >= 60 && $menit % 60 === 0) {
            $estimasi = ($menit / 60) . ' Jam';
        } else {
            $estimasi = $menit . ' Menit';
        }

        $dataStruk = [
            'nama' => $antrean->nama_pelanggan,
            'whatsapp' => $antrean->no_hp,
            'merek' => $antrean->merek_sepatu,
            'paket' => $antrean->layanan->nama_layanan,
            'catatan' => $antrean->catatan ?? 'Tidak ada catatan',
            'harga' => 'Rp' . number_format(
                $antrean->layanan->harga,
                0,
                ',',
                '.'
            ),
            'estimasi' => $estimasi,
            'resi' => $antrean->kode_antrean,
        ];

        $layanans = Layanan::orderBy('nama_layanan')->get();

        return view('pendaftaran', compact('dataStruk', 'layanans'));
    }
}