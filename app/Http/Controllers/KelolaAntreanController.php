<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Antrean;
use Illuminate\Http\Request;

class KelolaAntreanController extends Controller
{
    // Menampilkan daftar antrean
    public function index(Request $request)
    {
        // Mengambil data antrean beserta layanan
        $antreans = Antrean::with('layanan')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->search;

                $query->where(function ($q) use ($search) {
                    $q->where('kode_antrean', 'like', "%{$search}%")
                        ->orWhere('nama_pelanggan', 'like', "%{$search}%")
                        ->orWhere('no_hp', 'like', "%{$search}%");
                });
            })
            ->when($request->filled('status'), function ($query) use ($request) {
                $query->where('status', $request->status);
            })
            ->latest('tanggal_masuk')
            ->paginate(10)
            ->withQueryString();

        // Statistik antrean
        $totalAntreanAktif = Antrean::whereIn('status', [
            'menunggu',
            'sedang_dikerjakan',
            'siap_diambil'
        ])->count();

        $totalDikerjakan = Antrean::where('status', 'sedang_dikerjakan')->count();

        $totalSiapDiambil = Antrean::where('status', 'siap_diambil')->count();

        // Pendapatan dari antrean yang selesai hari ini
        $antreanSelesaiHariIni = Antrean::with('layanan')
            ->where('status', 'selesai')
            ->whereDate('tanggal_selesai', today())
            ->get();

        $pendapatanHariIni = $antreanSelesaiHariIni->sum(
            fn ($antrean) => $antrean->layanan?->harga ?? 0
        );

        $totalSelesaiHariIni = $antreanSelesaiHariIni->count();

        return view('kelola-antrean-admin', compact(
            'antreans',
            'totalAntreanAktif',
            'totalDikerjakan',
            'totalSiapDiambil',
            'pendapatanHariIni',
            'totalSelesaiHariIni'
        ));
    }

    public function updateStatus(Request $request, Antrean $antrean)
    {
        $validated = $request->validate([
            'status' => [
                'required',
                'in:menunggu,sedang_dikerjakan,siap_diambil,selesai',
            ],
        ]);

        $dataUpdate = [
            'status' => $validated['status'],
        ];

        if ($validated['status'] === 'selesai') {
            $dataUpdate['tanggal_selesai'] = now();
        } else {
            $dataUpdate['tanggal_selesai'] = null;
        }

        $antrean->update($dataUpdate);

        return redirect()
            ->route('kelola-antrean-admin')
            ->with('success', 'Status antrean berhasil diperbarui.');
    }
}