<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Layanan - Patina Archive</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-slate-50 font-sans antialiased text-slate-900">

<div class="flex min-h-screen">

    <!-- SIDEBAR ADMIN -->
    <aside class="w-64 bg-white border-r border-slate-200 hidden md:flex flex-col justify-between">

        <div>
            <div class="h-20 flex items-center px-8 border-b border-slate-100 gap-3">
                <div class="bg-slate-900 text-white font-bold px-3 py-2 rounded-xl text-sm">
                    PA
                </div>
                <span class="font-bold text-lg tracking-tight">
                    Patina Archive
                </span>
            </div>

            <div class="p-6 space-y-2">
                <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 px-3 mb-3">
                    Menu Utama
                </p>

                <a href="{{ route('dashboard-admin') }}"
                    class="block px-4 py-3 text-slate-600 hover:bg-slate-50 font-medium rounded-2xl text-sm">
                    Dashboard
                </a>

                <a href="{{ route('kelola-antrean-admin') }}"
                    class="block px-4 py-3 text-slate-600 hover:bg-slate-50 font-medium rounded-2xl text-sm">
                    Kelola Antrean
                </a>

                <a href="{{ route('layanan.index') }}"
                    class="block px-4 py-3 bg-slate-900 text-white font-medium rounded-2xl text-sm">
                    Kelola Layanan
                </a>

                <a href="{{ route('laporan-pendapatan-admin') }}"
                    class="block px-4 py-3 text-slate-600 hover:bg-slate-50 font-medium rounded-2xl text-sm">
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
                    <p class="text-xs font-bold text-slate-900">
                        {{ auth()->user()->name }}
                    </p>
                    <p class="text-[10px] text-slate-400">Admin</p>
                </div>
            </div>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                    class="block w-full py-2.5 text-center text-rose-600 bg-rose-50 hover:bg-rose-100 font-medium rounded-xl text-xs">
                    Keluar
                </button>
            </form>

        </div>
    </aside>

    <!-- KONTEN UTAMA -->
    <main class="flex-1 min-w-0 overflow-y-auto p-8 lg:p-12">

        <!-- HEADER -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-10">

            <div>
                <p class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-1">
                    Manajemen Data
                </p>

                <h1 class="text-3xl font-extrabold tracking-tight">
                    Kelola layanan
                </h1>

                <p class="text-sm text-slate-500 mt-1">
                    Atur jenis layanan dan harga perawatan sepatu Patina Archive.
                </p>
            </div>

            <a href="{{ route('layanan.create') }}"
                class="px-5 py-3 bg-slate-900 text-white font-medium rounded-2xl shadow hover:bg-slate-800 transition text-sm text-center">
                + Tambah Layanan
            </a>

        </div>

        <!-- STATISTIK -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-10">

            <div class="bg-white p-6 rounded-3xl border border-slate-200/80 shadow-sm">
                <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-2">
                    Total Jenis Layanan
                </p>

                <h3 class="text-3xl font-extrabold text-slate-900">
                    {{ $layanans->total() }}
                </h3>

                <p class="text-xs text-slate-400 mt-2">
                    Layanan yang terdaftar di database
                </p>
            </div>

            <div class="bg-white p-6 rounded-3xl border border-slate-200/80 shadow-sm">
                <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-2">
                    Data Ditampilkan
                </p>

                <h3 class="text-3xl font-extrabold text-slate-900">
                    {{ $layanans->count() }}
                </h3>

                <p class="text-xs text-slate-400 mt-2">
                    Maksimal 10 layanan per halaman
                </p>
            </div>

        </div>

        <!-- NOTIFIKASI -->
        @if (session('success'))
            <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-700 rounded-2xl text-sm">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="mb-6 p-4 bg-rose-50 border border-rose-200 text-rose-700 rounded-2xl text-sm">
                {{ session('error') }}
            </div>
        @endif

        <!-- TABEL LAYANAN -->
        <div class="bg-white border border-slate-200/80 rounded-3xl p-6 md:p-8 shadow-sm">

            <!-- JUDUL DAN PENCARIAN -->
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6 pb-6 border-b border-slate-100">

                <div>
                    <h3 class="font-bold text-slate-900 text-base">
                        Daftar layanan
                    </h3>

                    <p class="text-xs text-slate-400 mt-0.5">
                        Daftar layanan perawatan sepatu yang tersedia.
                    </p>
                </div>

                <form action="{{ route('layanan.index') }}" method="GET"
                    class="flex items-center gap-2">

                    <input type="text"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Cari nama layanan..."
                        class="w-full md:w-64 px-4 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs focus:outline-none focus:ring-2 focus:ring-slate-900">

                    <button type="submit"
                        class="px-4 py-2 bg-slate-900 text-white rounded-xl text-xs font-medium hover:bg-slate-800">
                        Cari
                    </button>

                </form>

            </div>

            <!-- TABEL -->
            <div class="overflow-x-auto">

                <table class="w-full text-left text-sm">

                    <thead>
                        <tr class="text-[11px] font-bold uppercase tracking-wider text-slate-400 border-b border-slate-100">
                            <th class="pb-4 pr-4">No.</th>
                            <th class="pb-4 pr-4">Nama Layanan</th>
                            <th class="pb-4 pr-4">Harga</th>
                            <th class="pb-4 pr-4">Estimasi</th>
                            <th class="pb-4 pr-4">Deskripsi</th>
                            <th class="pb-4 text-right">Aksi</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-slate-100">

                        @forelse ($layanans as $layanan)

                            <tr class="hover:bg-slate-50/70 transition">

                                <td class="py-5 pr-4 font-semibold text-slate-500">
                                    {{ $layanans->firstItem() + $loop->index }}
                                </td>

                                <td class="py-5 pr-4 font-bold text-slate-900">
                                    {{ $layanan->nama_layanan }}
                                </td>

                                <td class="py-5 pr-4 font-semibold text-slate-700">
                                    Rp{{ number_format($layanan->harga, 0, ',', '.') }}
                                </td>

                                <td class="py-5 pr-4 text-slate-600">
                                    @if ($layanan->estimasi_waktu >= 1440)
                                        {{ floor($layanan->estimasi_waktu / 1440) }} hari
                                    @elseif ($layanan->estimasi_waktu >= 60)
                                        {{ floor($layanan->estimasi_waktu / 60) }} jam
                                    @else
                                        {{ $layanan->estimasi_waktu }} menit
                                    @endif
                                </td>

                                <td class="py-5 pr-4 text-slate-500 max-w-xs">
                                    {{ $layanan->deskripsi ?: '-' }}
                                </td>

                                <td class="py-5 text-right whitespace-nowrap">

                                    <a href="{{ route('layanan.edit', $layanan->id) }}"
                                        class="inline-block px-4 py-2 bg-white border border-slate-200 text-slate-700 font-medium rounded-xl hover:bg-slate-50 text-xs">
                                        Edit
                                    </a>

                                    <button type="button"
                                        data-url="{{ route('layanan.destroy', $layanan->id) }}"
                                        data-name="{{ $layanan->nama_layanan }}"
                                        onclick="openDeleteModal(this)"
                                        class="px-4 py-2 bg-white border border-rose-200 text-rose-600 font-medium rounded-xl hover:bg-rose-50 text-xs">
                                        Hapus
                                    </button>

                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="6" class="py-12 text-center text-slate-400">
                                    @if (request('search'))
                                        Layanan dengan nama "{{ request('search') }}" tidak ditemukan.
                                    @else
                                        Belum ada data layanan.
                                    @endif
                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

            <!-- PAGINATION -->
            <div class="mt-6">
                {{ $layanans->links() }}
            </div>

        </div>

    </main>
</div>
<div id="deleteModal"
    class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm hidden items-center justify-center z-50 p-4">

    <div class="bg-white border border-slate-200 rounded-3xl p-8 max-w-md w-full shadow-xl">

        <!-- IKON -->
        <div class="w-14 h-14 rounded-2xl bg-rose-50 text-rose-600 flex items-center justify-center mb-5 mx-auto">
            <svg xmlns="http://www.w3.org/2000/svg"
                width="28" height="28" viewBox="0 0 24 24"
                fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="M3 6h18"/>
                <path d="M8 6V4h8v2"/>
                <path d="m19 6-1 14H6L5 6"/>
                <path d="M10 11v5"/>
                <path d="M14 11v5"/>
            </svg>
        </div>

        <!-- INFORMASI -->
        <div class="mb-6 text-center">
            <p class="text-[10px] font-bold uppercase tracking-widest text-rose-500 mb-2">
                Konfirmasi Penghapusan
            </p>

            <h3 class="text-xl font-extrabold text-slate-900">
                Hapus layanan?
            </h3>

            <p class="text-sm text-slate-500 mt-2">
                Apakah kamu yakin ingin menghapus layanan
                <span id="deleteServiceName" class="font-bold text-slate-800"></span>?
                Tindakan ini tidak dapat dibatalkan.
            </p>
        </div>

        <!-- FORM -->
        <form id="deleteForm" method="POST" class="flex gap-3">
            @csrf
            @method('DELETE')

            <button type="button"
                onclick="closeDeleteModal()"
                class="flex-1 flex items-center justify-center py-3 bg-slate-100 hover:bg-slate-200 text-slate-700 font-medium rounded-2xl text-sm">
                Batal
            </button>

            <button type="submit"
                class="flex-1 flex items-center justify-center py-3 bg-rose-50 hover:bg-rose-100 text-rose-600 border border-rose-200 font-medium rounded-2xl text-sm">
                Ya, Hapus
            </button>
        </form>

    </div>
</div>

    <script>
        function openDeleteModal(button) {
            const modal = document.getElementById('deleteModal');

            document.getElementById('deleteForm').action =
                button.dataset.url;

            document.getElementById('deleteServiceName').textContent =
                button.dataset.name;

            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeDeleteModal() {
            const modal = document.getElementById('deleteModal');

            modal.classList.remove('flex');
            modal.classList.add('hidden');
        }

        // Klik area luar untuk menutup modal
        document.getElementById('deleteModal').addEventListener('click', function(event) {
            if (event.target === this) {
                closeDeleteModal();
            }
        });

        // Tombol Escape untuk menutup modal
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeDeleteModal();
            }
        });
    </script>
    </body>
    </html>

</body>
</html>