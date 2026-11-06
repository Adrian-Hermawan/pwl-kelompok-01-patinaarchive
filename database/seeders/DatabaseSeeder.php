<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Layanan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Akun Admin
        User::updateOrCreate(
            ['email' => 'admin@patinaarchive.com'],
            [
                'name' => 'Admin Patina',
                'password' => 'admin12345',
                'role' => 'admin',
            ]
        );

        // Akun Operator
        User::updateOrCreate(
            ['email' => 'operator@patinaarchive.com'],
            [
                'name' => 'Operator Patina',
                'password' => 'operator12345',
                'role' => 'operator',
            ]
        );

        // Data layanan awal
        $layanans = [
            [
                'nama_layanan' => 'Fast Cleaning',
                'harga' => 35000,
                'estimasi_waktu' => 60,
                'deskripsi' => 'Pembersihan sepatu bagian luar.',
            ],
            [
                'nama_layanan' => 'Deep Cleaning',
                'harga' => 60000,
                'estimasi_waktu' => 1440,
                'deskripsi' => 'Pembersihan menyeluruh bagian luar dan dalam.',
            ],
            [
                'nama_layanan' => 'Unyellowing',
                'harga' => 50000,
                'estimasi_waktu' => 2880,
                'deskripsi' => 'Perawatan untuk mengurangi efek menguning pada sol sepatu.',
            ],
        ];

        foreach ($layanans as $layanan) {
            Layanan::updateOrCreate(
                ['nama_layanan' => $layanan['nama_layanan']],
                $layanan
            );
        }
    }
}