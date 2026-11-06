<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('antreans', function (Blueprint $table) {
            $table->id();

            // Informasi antrean dan pelanggan
            $table->string('kode_antrean')->unique();
            $table->string('nama_pelanggan');
            $table->string('no_hp');

            // Relasi ke tabel layanan
            $table->foreignId('layanan_id')
                ->constrained('layanans')
                ->restrictOnDelete();

            // Operator yang menangani antrean
            $table->foreignId('user_id')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            // Disiapkan untuk fitur akun pelanggan di masa depan
            $table->foreignId('pelanggan_id')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            // Status pengerjaan
            $table->string('status')->default('menunggu');

            $table->timestamp('tanggal_masuk')->useCurrent();
            $table->timestamp('tanggal_selesai')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('antreans');
    }
};