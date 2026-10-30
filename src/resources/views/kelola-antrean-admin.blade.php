<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Antrean - Patina Archive</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'system-ui', '-apple-system', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-slate-50 font-sans antialiased text-slate-900">

<div class="flex h-screen overflow-hidden">

    <!-- SIDEBAR ADMIN -->
    <aside class="w-64 bg-white border-r border-slate-200 hidden md:flex flex-col justify-between">

        <div>
            <div class="h-20 flex items-center px-8 border-b border-slate-100 gap-3">
                <div class="bg-slate-900 text-white font-bold px-3 py-2 rounded-xl text-sm tracking-wide">
                    PA
                </div>
                <span class="font-bold text-lg tracking-tight text-slate-900">
                    Patina Archive
                </span>
            </div>

            <div class="p-6 space-y-2">
                <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 px-3 mb-3">
                    Menu Utama
                </p>

                <a href="{{ route('dashboard-admin') }}"
                    class="flex items-center px-4 py-3 text-slate-600 hover:bg-slate-50 font-medium rounded-2xl transition text-sm">
                    Dashboard
                </a>

                <a href="{{ route('kelola-antrean-admin') }}"
                    class="flex items-center px-4 py-3 bg-slate-900 text-white font-medium rounded-2xl shadow-sm text-sm">
                    Kelola Antrean
                </a>

                <a href="{{ url('/laporan-pendapatan-admin') }}"
                    class="flex items-center px-4 py-3 text-slate-600 hover:bg-slate-50 hover:text-slate-900 font-medium rounded-2xl transition text-sm">
                    Laporan Pendapatan
                </a>
            </div>
        </div>

        <!-- PROFIL DAN KELUAR -->
        <div class="p-6 border-t border-slate-100 space-y-4">
            <div class="flex items-center gap-3 px-2">
                <div class="w-9 h-9 rounded-full bg-slate-900 text-white flex items-center justify-center font-bold text-xs">
                    AD
                </div>
                <div>
                    <p class="text-xs font-bold text-slate-900">Admin</p>
                    <p class="text-[10px] text-slate-400">Pengelola</p>
                </div>
            </div>

            <a href="{{ route('login-admin') }}"
                class="block w-full py-2.5 text-center text-rose-600 bg-rose-50 hover:bg-rose-100 font-medium rounded-xl transition text-xs">
                Keluar
            </a>
        </div>

    </aside>

    <!-- KONTEN UTAMA -->
    <main class="flex-1 flex flex-col min-w-0 overflow-y-auto p-8 lg:p-12">

        <!-- HEADER -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-10">
            <div>
                <p class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-1">
                    Jumat, 30 Oktober 2026
                </p>
                <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight">
                    Kelola antrean & laporan
                </h1>
                <p class="text-sm text-slate-500 mt-1">
                    Pantau aktivitas operasional Patina Archive hari ini.
                </p>
            </div>

            <div>
                <a href="{{ route('pendaftaran') }}"
                    class="px-5 py-3 bg-slate-900 text-white font-medium rounded-2xl shadow hover:bg-slate-800 transition text-sm flex items-center gap-2">
                    + Tambah Order
                </a>
            </div>
        </div>

        <!-- STATISTIK -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">

            <div class="bg-white p-6 rounded-3xl border border-slate-200/80 shadow-sm">
                <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-2">
                    Total Antrean Aktif
                </p>
                <h3 class="text-3xl font-extrabold text-slate-900">24</h3>
                <p class="text-xs text-slate-400 mt-2">+4 dari kemarin</p>
            </div>

            <div class="bg-white p-6 rounded-3xl border border-slate-200/80 shadow-sm">
                <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-2">
                    Sedang Dikerjakan
                </p>
                <h3 class="text-3xl font-extrabold text-slate-900">8</h3>
                <p class="text-xs text-slate-400 mt-2">33% dari antrean aktif</p>
            </div>

            <div class="bg-white p-6 rounded-3xl border border-slate-200/80 shadow-sm">
                <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-2">
                    Siap Diambil
                </p>
                <h3 class="text-3xl font-extrabold text-slate-900">6</h3>
                <p class="text-xs text-slate-400 mt-2">Perlu konfirmasi pelanggan</p>
            </div>

            <div class="bg-white p-6 rounded-3xl border border-slate-200/80 shadow-sm">
                <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-2">
                    Pendapatan Hari Ini
                </p>
                <h3 class="text-3xl font-extrabold text-slate-900">Rp735.000</h3>
                <p class="text-xs text-slate-400 mt-2">12 order selesai</p>
            </div>

        </div>

        <!-- TABEL ANTREAN -->
        <div class="bg-white border border-slate-200/80 rounded-3xl p-6 md:p-8 shadow-sm">

            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6 pb-6 border-b border-slate-100">
                <div>
                    <h3 class="font-bold text-slate-900 text-base">Antrean terbaru</h3>
                    <p class="text-xs text-slate-400 mt-0.5">
                        Daftar order masuk dan progres pengerjaan.
                    </p>
                </div>

                <div class="flex items-center gap-3">
                    <input type="text" placeholder="Cari antrean atau pelanggan"
                        class="px-4 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:outline-none focus:ring-2 focus:ring-slate-900">

                    <select class="px-4 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-600 focus:outline-none">
                        <option>Semua status</option>
                        <option>Sedang dikerjakan</option>
                        <option>Siap diambil</option>
                    </select>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead>
                        <tr class="text-[11px] font-bold uppercase tracking-wider text-slate-400 border-b border-slate-100">
                            <th class="pb-3">No. Antrean</th>
                            <th class="pb-3">Pelanggan / Sepatu</th>
                            <th class="pb-3">Layanan</th>
                            <th class="pb-3">Status</th>
                            <th class="pb-3">Estimasi</th>
                            <th class="pb-3 text-right">Aksi</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-slate-100">
                        <tr>
                            <td class="py-4 font-bold text-slate-900">CS-251008-014</td>

                            <td class="py-4">
                                <p class="font-bold text-slate-900">Nadia Putri</p>
                                <p class="text-xs text-slate-400">Nike Air Force 1</p>
                            </td>

                            <td class="py-4 font-medium text-slate-700">Premium</td>

                            <td class="py-4">
                                <span class="px-3 py-1 bg-slate-100 text-slate-800 text-xs font-semibold rounded-full border border-slate-200">
                                    Sedang dikerjakan
                                </span>
                            </td>

                            <td class="py-4 text-slate-600">Hari ini, 16.00</td>

                            <td class="py-4 text-right space-x-2">
                                <button type="button"
                                    onclick="openModal('CS-251008-014', 'Nadia Putri', 'Nike Air Force 1')"
                                    class="px-4 py-1.5 bg-white border border-slate-200 text-slate-700 font-medium rounded-xl hover:bg-slate-50 transition text-xs">
                                    Edit
                                </button>

                                <button type="button"
                                    onclick="alert('Fitur hapus belum diaktifkan.')"
                                    class="px-4 py-1.5 bg-white border border-rose-200 text-rose-600 font-medium rounded-xl hover:bg-rose-50 transition text-xs">
                                    Hapus
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="text-xs text-slate-400 mt-4">
                Data antrean di atas merupakan data simulasi.
            </p>

        </div>

    </main>
</div>

<!-- MODAL EDIT -->
<div id="editModal"
    class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm hidden items-center justify-center z-50 p-4">

    <div class="bg-white border border-slate-200/90 rounded-3xl p-8 max-w-lg w-full shadow-xl relative">

        <button type="button" onclick="closeModal()"
            class="absolute top-6 right-6 w-8 h-8 rounded-full bg-slate-100 hover:bg-slate-200 flex items-center justify-center text-slate-600 font-bold transition">
            &times;
        </button>

        <div class="mb-6">
            <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">
                Edit Data Order
            </p>
            <h3 class="text-xl font-extrabold text-slate-900">
                Perbaiki data pelanggan
            </h3>
        </div>

        <div class="flex items-center gap-3 p-4 bg-slate-50 rounded-2xl border border-slate-100 mb-6">
            <div id="modalAvatar"
                class="w-10 h-10 rounded-full bg-slate-900 text-white flex items-center justify-center font-bold text-xs">
                NP
            </div>

            <div>
                <p id="modalNamaText" class="font-bold text-slate-900 text-sm">
                    Nadia Putri
                </p>
                <p id="modalSubText" class="text-xs text-slate-400">
                    Nike Air Force 1 · Premium
                </p>
            </div>
        </div>

        <form onsubmit="event.preventDefault(); alert('Fitur simpan belum diaktifkan karena database belum dibuat.'); closeModal();" class="space-y-4">

            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-slate-500 mb-2">
                    Nama Pelanggan
                </label>

                <input type="text" id="inputNama" name="nama" value="Nadia Putri" required
                    class="w-full px-4 py-3 bg-slate-50/50 border border-slate-200 rounded-2xl text-sm focus:outline-none focus:bg-white focus:ring-2 focus:ring-slate-900 transition">
            </div>

            <div class="pt-4 flex gap-3">
                <button type="button" onclick="closeModal()"
                    class="flex-1 py-3 bg-slate-100 hover:bg-slate-200 text-slate-700 font-medium rounded-2xl transition text-sm">
                    Batal
                </button>

                <button type="submit"
                    class="flex-1 py-3 bg-slate-900 hover:bg-slate-800 text-white font-medium rounded-2xl transition text-sm shadow">
                    Simpan Perubahan
                </button>
            </div>

        </form>
    </div>
</div>

<!-- JAVASCRIPT MODAL -->
<script>
    function openModal(resi, nama, sepatu) {
        const modal = document.getElementById('editModal');

        modal.classList.remove('hidden');
        modal.classList.add('flex');

        document.getElementById('modalNamaText').innerText = nama;
        document.getElementById('inputNama').value = nama;
        document.getElementById('modalSubText').innerText = sepatu + ' · Premium';

        const initials = nama.split(' ')
            .map(n => n[0])
            .join('')
            .substring(0, 2)
            .toUpperCase();

        document.getElementById('modalAvatar').innerText = initials;
    }

    function closeModal() {
        const modal = document.getElementById('editModal');

        modal.classList.remove('flex');
        modal.classList.add('hidden');
    }
</script>

</body>
</html>