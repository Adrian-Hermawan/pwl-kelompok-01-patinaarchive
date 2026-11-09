<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Antrean;

class CekStatusController extends Controller
{
    public function index(Request $request)
    {
        $resi = trim($request->query('resi', ''));

        $dataAntrean = null;

        if ($resi !== '') {
            $antrean = Antrean::with('layanan')
                ->where('kode_antrean', $resi)
                ->first();

            if ($antrean) {
                $menit = $antrean->layanan->estimasi_waktu;

                if ($menit >= 1440 && $menit % 1440 === 0) {
                    $estimasi = ($menit / 1440) . ' Hari';
                } elseif ($menit >= 60 && $menit % 60 === 0) {
                    $estimasi = ($menit / 60) . ' Jam';
                } else {
                    $estimasi = $menit . ' Menit';
                }

                $statusLabels = [
                    'menunggu' => 'Menunggu',
                    'sedang_dikerjakan' => 'Sedang Dikerjakan',
                    'siap_diambil' => 'Siap Diambil',
                    'selesai' => 'Selesai',
                    'dibatalkan' => 'Dibatalkan',
                ];

                $dataAntrean = [
                    'resi' => $antrean->kode_antrean,
                    'status' => $statusLabels[$antrean->status]
                        ?? ucfirst($antrean->status),
                    'nama' => $antrean->nama_pelanggan,
                    'whatsapp' => $antrean->no_hp,
                    'sepatu' => $antrean->merek_sepatu,
                    'catatan' => $antrean->catatan ?: 'Tidak ada catatan',
                    'layanan' => $antrean->layanan->nama_layanan,
                    'harga' => 'Rp' . number_format(
                        $antrean->layanan->harga,
                        0,
                        ',',
                        '.'
                    ),
                    'estimasi' => $estimasi,
                    'waktu' => $antrean->tanggal_masuk
                        ? \Carbon\Carbon::parse($antrean->tanggal_masuk)
                            ->addMinutes($menit)
                            ->format('d/m/Y H:i') . ' WIB'
                        : '-',
                ];
            }
        }

        return view('cek-status', compact('resi', 'dataAntrean'));
    }
}