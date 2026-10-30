<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CekStatusController extends Controller
{
    public function index(Request $request)
    {
        $resi = $request->query('resi');

        $dataAntrean = null;

        if ($resi) {
            // Data simulasi, belum mengambil dari database
            $dataAntrean = [
                'resi' => $resi,
                'status' => 'Sedang Dikerjakan',
                'nama' => 'Data Simulasi',
                'whatsapp' => '081234567890',
                'sepatu' => 'Nike Air Force 1',
                'warna' => 'Putih',
                'layanan' => 'Premium',
                'harga' => 'Rp45.000',
                'estimasi' => 'Hari ini',
                'waktu' => '16.00 WIB',
            ];
        }

        return view('cek-status', compact('resi', 'dataAntrean'));
    }
}