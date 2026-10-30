@extends('layouts.app')

@section('title', 'Pendaftaran Antrean - Patina Archive')

@section('content')

<main class="max-w-6xl mx-auto px-6 py-12">

    @if (!$dataStruk)

        <!-- HEADER -->
        <div class="mb-10">
            <p class="text-xs font-semibold uppercase tracking-widest text-slate-400 mb-2">
                Pendaftaran Online
            </p>
            <h1 class="text-4xl font-extrabold text-slate-900 tracking-tight mb-2">
                Daftarkan sepatu kamu.
            </h1>
            <p class="text-sm text-slate-500 font-normal">
                Isi data berikut untuk mendapatkan nomor antrean perawatan.
            </p>
        </div>

        <!-- FORM PENDAFTARAN -->
        <div class="bg-white border border-slate-200/80 rounded-3xl p-8 md:p-12 shadow-sm mb-12">

            <div class="flex items-center gap-4 mb-8 pb-6 border-b border-slate-100">
                <div class="w-10 h-10 rounded-full border border-slate-300 flex items-center justify-center text-sm font-medium text-slate-700">
                    01
                </div>
                <div>
                    <h3 class="font-bold text-slate-900 text-base">
                        Data pelanggan & sepatu
                    </h3>
                    <p class="text-xs text-slate-400 mt-0.5">
                        Pastikan nomor WhatsApp dapat dihubungi.
                    </p>
                </div>
            </div>

            <form action="{{ route('pendaftaran.store') }}" method="POST" class="space-y-6">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-slate-900 mb-2">
                            Nama Lengkap
                        </label>
                        <input type="text" name="nama" value="{{ old('nama') }}" required
                            placeholder="Masukkan nama lengkap"
                            class="w-full px-4 py-3.5 bg-slate-50/50 border border-slate-200/80 rounded-2xl text-sm placeholder-slate-400 focus:outline-none focus:bg-white focus:ring-2 focus:ring-slate-900 transition">
                        @error('nama')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-900 mb-2">
                            No. HP / WhatsApp
                        </label>
                        <input type="text" name="whatsapp" value="{{ old('whatsapp') }}" required
                            placeholder="08xx xxxx xxxx"
                            class="w-full px-4 py-3.5 bg-slate-50/50 border border-slate-200/80 rounded-2xl text-sm placeholder-slate-400 focus:outline-none focus:bg-white focus:ring-2 focus:ring-slate-900 transition">
                        @error('whatsapp')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-slate-900 mb-2">
                            Merek / Jenis Sepatu
                        </label>
                        <input type="text" name="merek" value="{{ old('merek') }}" required
                            placeholder="Contoh: Nike Air Force 1"
                            class="w-full px-4 py-3.5 bg-slate-50/50 border border-slate-200/80 rounded-2xl text-sm placeholder-slate-400 focus:outline-none focus:bg-white focus:ring-2 focus:ring-slate-900 transition">
                        @error('merek')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-900 mb-2">
                            Pilihan Layanan
                        </label>
                        <select name="paket" required
                            class="w-full px-4 py-3.5 bg-slate-50/50 border border-slate-200/80 rounded-2xl text-sm text-slate-500 focus:outline-none focus:bg-white focus:ring-2 focus:ring-slate-900 transition">

                            <option value="" disabled {{ old('paket') ? '' : 'selected' }}>
                                Pilih paket layanan
                            </option>

                            <option value="Deep Cleaning" {{ old('paket') == 'Deep Cleaning' ? 'selected' : '' }}>
                                Deep Cleaning
                            </option>
                            <option value="Fast Cleaning" {{ old('paket') == 'Fast Cleaning' ? 'selected' : '' }}>
                                Fast Cleaning
                            </option>
                            <option value="Unyellowing" {{ old('paket') == 'Unyellowing' ? 'selected' : '' }}>
                                Unyellowing
                            </option>
                            <option value="Repaint" {{ old('paket') == 'Repaint' ? 'selected' : '' }}>
                                Repaint
                            </option>
                        </select>
                        @error('paket')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-900 mb-2">
                        Catatan (opsional)
                    </label>
                    <textarea name="catatan" rows="3"
                        placeholder="Contoh: noda utama di bagian midsole"
                        class="w-full px-4 py-3.5 bg-slate-50/50 border border-slate-200/80 rounded-2xl text-sm placeholder-slate-400 focus:outline-none focus:bg-white focus:ring-2 focus:ring-slate-900 transition">{{ old('catatan') }}</textarea>
                    @error('catatan')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="pt-4">
                    <button type="submit"
                        class="w-full py-4 bg-slate-900 text-white font-medium rounded-2xl shadow-sm hover:bg-slate-800 transition text-sm flex items-center justify-center gap-2">
                        Daftar Antrean Sekarang &rarr;
                    </button>
                    <p class="text-center text-xs text-slate-400 mt-3 font-normal">
                        Dengan mendaftar, kamu menyetujui estimasi waktu pengerjaan.
                    </p>
                </div>

            </form>
        </div>

    @else

        <!-- PREVIEW STRUK PENDAFTARAN -->
        <div class="bg-white border border-slate-200/80 rounded-3xl p-8 md:p-12 shadow-sm mb-12 max-w-2xl mx-auto">

            <div class="flex items-center gap-4 mb-8 pb-6 border-b border-slate-100">
                <div class="w-10 h-10 rounded-full bg-slate-900 text-white flex items-center justify-center text-sm font-bold">
                    ✓
                </div>
                <div>
                    <h3 class="font-bold text-slate-900 text-base">
                        PREVIEW PENDAFTARAN
                    </h3>
                    <p class="text-xs text-slate-400 mt-0.5">
                        Nomor antrean berhasil dibuat.
                    </p>
                </div>
            </div>

            <div class="text-center py-6 border-b border-dashed border-slate-200 mb-8">
                <p class="text-xs font-semibold uppercase tracking-widest text-slate-400 mb-2">
                    Nomor Antrean
                </p>
                <h2 class="text-4xl font-extrabold text-slate-900 tracking-tight">
                    {{ $dataStruk['resi'] }}
                </h2>
                <p class="text-xs text-slate-400 mt-2">
                    Simpan nomor ini untuk melacak status.
                </p>
            </div>

            <div class="space-y-4 text-sm mb-8">

                <div class="flex justify-between py-2 border-b border-slate-100">
                    <span class="text-slate-400">Nama</span>
                    <span class="font-medium text-slate-900">{{ $dataStruk['nama'] }}</span>
                </div>

                <div class="flex justify-between py-2 border-b border-slate-100">
                    <span class="text-slate-400">Sepatu</span>
                    <span class="font-medium text-slate-900">{{ $dataStruk['merek'] }}</span>
                </div>

                <div class="flex justify-between py-2 border-b border-slate-100">
                    <span class="text-slate-400">Layanan</span>
                    <span class="font-medium text-slate-900">{{ $dataStruk['paket'] }}</span>
                </div>

                <div class="flex justify-between py-2 border-b border-slate-100">
                    <span class="text-slate-400">Estimasi</span>
                    <span class="font-medium text-slate-900">{{ $dataStruk['estimasi'] }}</span>
                </div>

                <div class="flex justify-between py-2 border-b border-slate-100">
                    <span class="text-slate-400">Catatan</span>
                    <span class="font-medium text-slate-900">{{ $dataStruk['catatan'] }}</span>
                </div>

                <div class="flex justify-between py-2">
                    <span class="text-slate-400 font-semibold">Total</span>
                    <span class="font-bold text-slate-900">{{ $dataStruk['harga'] }}</span>
                </div>

            </div>

            <div class="space-y-3">
                <a href="{{ url('/cek-status') }}?resi={{ $dataStruk['resi'] }}"
                    class="w-full block py-4 text-center bg-slate-900 text-white font-medium rounded-2xl shadow hover:bg-slate-800 transition text-sm">
                    Cetak Status Antrean
                </a>

                <a href="{{ route('pendaftaran') }}"
                    class="w-full block py-3 text-center bg-slate-100 text-slate-700 font-medium rounded-2xl hover:bg-slate-200 transition text-sm">
                    Daftar Antrean Lainnya
                </a>
            </div>

            <div class="text-center mt-8">
                <p class="text-xs text-slate-400">
                    Patina Archive · Jl. Pendidikan No. 18
                </p>
            </div>

        </div>

    @endif

</main>

@endsection