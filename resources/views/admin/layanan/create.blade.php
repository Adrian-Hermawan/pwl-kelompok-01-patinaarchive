<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Layanan - Patina Archive</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>

<body class="bg-slate-50 antialiased text-slate-900">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-white border-r border-slate-200 hidden md:flex flex-col justify-between">

        <div>
            <div class="h-20 flex items-center px-8 border-b border-slate-100 gap-3">
                <div class="bg-slate-900 text-white font-bold px-3 py-2 rounded-xl text-sm">
                    PA
                </div>
                <span class="font-bold text-lg">Patina Archive</span>
            </div>

            <div class="p-6 space-y-2">
                <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 px-3 mb-3">
                    Menu Utama
                </p>

                <a href="{{ route('dashboard-admin') }}"
                    class="block px-4 py-3 text-slate-600 hover:bg-slate-50 rounded-2xl text-sm">
                    Dashboard
                </a>

                <a href="{{ route('kelola-antrean-admin') }}"
                    class="block px-4 py-3 text-slate-600 hover:bg-slate-50 rounded-2xl text-sm">
                    Kelola Antrean
                </a>

                <a href="{{ route('layanan.index') }}"
                    class="block px-4 py-3 bg-slate-900 text-white rounded-2xl text-sm font-medium">
                    Kelola Layanan
                </a>

                <a href="{{ route('laporan-pendapatan-admin') }}"
                    class="block px-4 py-3 text-slate-600 hover:bg-slate-50 rounded-2xl text-sm">
                    Laporan Pendapatan
                </a>
            </div>
        </div>

        <!-- PROFIL DAN LOGOUT -->
        <div class="p-6 border-t border-slate-100 space-y-4">
            <div class="flex items-center gap-3 px-2">
                <div class="w-9 h-9 rounded-full bg-slate-900 text-white flex items-center justify-center font-bold text-xs">
                    AD
                </div>
                <div>
                    <p class="text-xs font-bold">{{ auth()->user()->name }}</p>
                    <p class="text-[10px] text-slate-400">Admin</p>
                </div>
            </div>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                    class="block w-full py-2.5 text-center text-rose-600 bg-rose-50 hover:bg-rose-100 rounded-xl text-xs">
                    Keluar
                </button>
            </form>
        </div>
    </aside>

    <!-- KONTEN UTAMA -->
    <main class="flex-1 min-w-0 p-8 lg:p-12">

        <!-- HEADER -->
        <div class="mb-8">
            <p class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-1">
                Manajemen Data
            </p>

            <h1 class="text-3xl font-extrabold tracking-tight">
                Tambah layanan
            </h1>

            <p class="text-sm text-slate-500 mt-1">
                Tambahkan jenis layanan perawatan sepatu baru.
            </p>
        </div>

        <!-- FORM -->
        <div class="max-w-3xl bg-white border border-slate-200/80 rounded-3xl p-6 md:p-8 shadow-sm">

            <div class="mb-6 pb-5 border-b border-slate-100">
                <h3 class="font-bold text-base">Informasi layanan</h3>
                <p class="text-xs text-slate-400 mt-1">
                    Lengkapi informasi layanan berikut.
                </p>
            </div>

            @if ($errors->any())
                <div class="mb-6 p-4 bg-rose-50 border border-rose-200 rounded-2xl text-rose-700 text-sm">
                    <p class="font-semibold mb-2">Terdapat kesalahan input:</p>
                    <ul class="list-disc list-inside space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('layanan.store') }}" method="POST" class="space-y-6">
                @csrf

                <!-- NAMA LAYANAN -->
                <div>
                    <label for="nama_layanan"
                        class="block text-xs font-semibold uppercase tracking-wider text-slate-500 mb-2">
                        Nama Layanan
                    </label>

                    <input type="text"
                        id="nama_layanan"
                        name="nama_layanan"
                        value="{{ old('nama_layanan') }}"
                        placeholder="Contoh: Fast Cleaning"
                        required
                        class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-2xl text-sm focus:outline-none focus:bg-white focus:ring-2 focus:ring-slate-900">

                    @error('nama_layanan')
                        <p class="text-xs text-rose-600 mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- HARGA -->
                <div>
                    <label for="harga"
                        class="block text-xs font-semibold uppercase tracking-wider text-slate-500 mb-2">
                        Harga Layanan (Rupiah)
                    </label>

                    <input type="number"
                        id="harga"
                        name="harga"
                        value="{{ old('harga') }}"
                        min="0"
                        step="0.01"
                        placeholder="Contoh: 35000"
                        required
                        class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-2xl text-sm focus:outline-none focus:bg-white focus:ring-2 focus:ring-slate-900">

                    @error('harga')
                        <p class="text-xs text-rose-600 mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- ESTIMASI WAKTU -->
                <div>
                    <label for="estimasi_waktu"
                        class="block text-xs font-semibold uppercase tracking-wider text-slate-500 mb-2">
                        Estimasi Waktu (Menit)
                    </label>

                    <input type="number"
                        id="estimasi_waktu"
                        name="estimasi_waktu"
                        value="{{ old('estimasi_waktu') }}"
                        min="1"
                        placeholder="Contoh: 60"
                        required
                        class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-2xl text-sm focus:outline-none focus:bg-white focus:ring-2 focus:ring-slate-900">

                    <p class="text-xs text-slate-400 mt-2">
                        Contoh: 60 menit = 1 jam, 1440 menit = 1 hari.
                    </p>

                    @error('estimasi_waktu')
                        <p class="text-xs text-rose-600 mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- DESKRIPSI -->
                <div>
                    <label for="deskripsi"
                        class="block text-xs font-semibold uppercase tracking-wider text-slate-500 mb-2">
                        Deskripsi Layanan
                    </label>

                    <textarea id="deskripsi"
                        name="deskripsi"
                        rows="4"
                        placeholder="Jelaskan layanan yang ditawarkan..."
                        class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-2xl text-sm focus:outline-none focus:bg-white focus:ring-2 focus:ring-slate-900">{{ old('deskripsi') }}</textarea>

                    @error('deskripsi')
                        <p class="text-xs text-rose-600 mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- TOMBOL -->
                <div class="pt-5 border-t border-slate-100 flex flex-col sm:flex-row gap-3">

                    <a href="{{ route('layanan.index') }}"
                        class="flex-1 py-3 text-center bg-slate-100 hover:bg-slate-200 text-slate-700 font-medium rounded-2xl text-sm">
                        Batal
                    </a>

                    <button type="submit"
                        class="flex-1 py-3 bg-slate-900 hover:bg-slate-800 text-white font-medium rounded-2xl text-sm shadow">
                        Simpan Layanan
                    </button>

                </div>

            </form>
        </div>

    </main>
</div>

</body>
</html>