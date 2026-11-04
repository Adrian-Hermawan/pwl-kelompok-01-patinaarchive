<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Antrean & Laporan - Patina Archive</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'system-ui', '-apple-system', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body class="bg-slate-50 font-sans antialiased text-slate-900">

    <div class="flex h-screen overflow-hidden">
        
        <!-- SIDEBAR ADMIN -->
        <aside class="w-64 bg-white border-r border-slate-200 hidden md:flex flex-col justify-between">
            <div>
                <!-- Logo Brand -->
                <div class="h-20 flex items-center px-8 border-b border-slate-100 gap-3">
                    <div class="bg-slate-900 text-white font-bold px-3 py-2 rounded-xl text-sm tracking-wide">PA</div>
                    <span class="font-bold text-lg tracking-tight text-slate-900">Patina Archive</span>
                </div>

                <!-- Navigasi Menu -->
                <div class="p-6 space-y-2">
                    <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 px-3 mb-3">Menu Utama</p>
                    
                    <a href="dashboard-admin.php" class="flex items-center px-4 py-3 text-slate-600 hover:bg-slate-50 font-medium rounded-2xl transition text-sm">
                        Dashboard
                    </a>
                    
                    <!-- Kelola Antrean (Aktif) -->
                    <a href="kelola-antrean-admin.php" class="flex items-center px-4 py-3 bg-slate-900 text-white font-medium rounded-2xl shadow-sm text-sm">
                        Kelola Antrean
                    </a>
                    
                    <a href="laporan-pendapatan-admin.php" class="flex items-center px-4 py-3 text-slate-600 hover:bg-slate-50 hover:text-slate-900 font-medium rounded-2xl transition text-sm">
                        Laporan Pendapatan
                    </a>
                </div>
            </div>

            <!-- Profil & Keluar -->
            <div class="p-6 border-t border-slate-100 space-y-4">
                <div class="flex items-center gap-3 px-2">
                    <div class="w-9 h-9 rounded-full bg-slate-900 text-white flex items-center justify-center font-bold text-xs">AD</div>
                    <div>
                        <p class="text-xs font-bold text-slate-900">Admin</p>
                        <p class="text-[10px] text-slate-400">Pengelola</p>
                    </div>
                </div>
                <a href="login-admin.php" class="block w-full py-2.5 text-center text-rose-600 bg-rose-50 hover:bg-rose-100 font-medium rounded-xl transition text-xs">
                    Keluar
                </a>
            </div>
        </aside>

        <!-- KONTEN UTAMA -->
        <main class="flex-1 flex flex-col min-w-0 overflow-y-auto p-8 lg:p-12">
            
            <!-- Header Halaman -->
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-10">
                <div>
                    <p class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-1">Rabu, 8 Oktober 2025</p>
                    <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight">Kelola antrean & laporan</h1>
                    <p class="text-sm text-slate-500 mt-1">Pantau aktivitas operasional Patina Archive hari ini.</p>
                </div>
                <div>
                    <a href="pendaftaran.php" target="_blank" class="px-5 py-3 bg-slate-900 text-white font-medium rounded-2xl shadow hover:bg-slate-800 transition text-sm flex items-center gap-2">
                        + Tambah Order
                    </a>
                </div>
            </div>

            <!-- 4 KOTAK STATISTIK -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
                <div class="bg-white p-6 rounded-3xl border border-slate-200/80 shadow-sm">
                    <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-2">Total Antrean Aktif</p>
                    <h3 class="text-3xl font-extrabold text-slate-900">24</h3>
                    <p class="text-xs text-slate-400 mt-2">+4 dari kemarin</p>
                </div>
                <div class="bg-white p-6 rounded-3xl border border-slate-200/80 shadow-sm">
                    <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-2">Sedang Dikerjakan</p>
                    <h3 class="text-3xl font-extrabold text-slate-900">8</h3>
                    <p class="text-xs text-slate-400 mt-2">33% dari antrean aktif</p>
                </div>
                <div class="bg-white p-6 rounded-3xl border border-slate-200/80 shadow-sm">
                    <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-2">Siap Diambil</p>
                    <h3 class="text-3xl font-extrabold text-slate-900">6</h3>
                    <p class="text-xs text-slate-400 mt-2">Perlu konfirmasi pelanggan</p>
                </div>
                <div class="bg-white p-6 rounded-3xl border border-slate-200/80 shadow-sm">
                    <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-2">Pendapatan Hari Ini</p>
                    <h3 class="text-3xl font-extrabold text-slate-900">Rp735.000</h3>
                    <p class="text-xs text-slate-400 mt-2">12 order selesai</p>
                </div>
            </div>

            <!-- TABEL ANTREAN TERBARU -->
            <div class="bg-white border border-slate-200/80 rounded-3xl p-6 md:p-8 shadow-sm">
                
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6 pb-6 border-b border-slate-100">
                    <div>
                        <h3 class="font-bold text-slate-900 text-base">Antrean terbaru</h3>
                        <p class="text-xs text-slate-400 mt-0.5">Daftar order masuk dan progres pengerjaan.</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <input type="text" placeholder="Cari antrean atau pelanggan" class="px-4 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:outline-none focus:ring-2 focus:ring-slate-900">
                        <select class="px-4 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-600 focus:outline-none">
                            <option>Semua status</option>
                            <option>Sedang dikerjakan</option>
                            <option>Siap diambil</option>
                        </select>
                    </div>
                </div>

                <!-- Tabel Data -->
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm">
                        <thead>
                            <tr class="text-[11px] font-bold uppercase tracking-wider text-slate-400 border-b border-slate-100 pb-3">
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
                                    <span class="px-3 py-1 bg-slate-100 text-slate-800 text-xs font-semibold rounded-full border border-slate-200">Sedang dikerjakan</span>
                                </td>
                                <td class="py-4 text-slate-600">Hari ini, 16.00</td>
                                <td class="py-4 text-right space-x-1.5">
                                    <!-- Tombol Pemicu Modal Detail (Baru) -->
                                    <button onclick="openDetailModal('CS-251008-014', 'Nadia Putri', '081234567890', 'Nike Air Force 1 (Warna putih)', 'Premium', 'Sedang dikerjakan', 'Noda utama di bagian midsole cukup pekat, perlu unyellowing juga.')" class="px-3 py-1.5 bg-slate-100 border border-slate-200 text-slate-700 font-medium rounded-xl hover:bg-slate-200 transition text-xs">
                                        Detail
                                    </button>
                                    <!-- Tombol Pemicu Modal Edit -->
                                    <button onclick="openModal('CS-251008-014', 'Nadia Putri', 'Nike Air Force 1')" class="px-3 py-1.5 bg-white border border-slate-200 text-slate-700 font-medium rounded-xl hover:bg-slate-50 transition text-xs">
                                        Edit
                                    </button>
                                    <!-- Tombol Hapus -->
                                    <button class="px-3 py-1.5 bg-white border border-rose-200 text-rose-600 font-medium rounded-xl hover:bg-rose-50 transition text-xs">
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </main>

    </div>

    <!-- MODAL DETAIL ANTRIAN (BARU - UNTUK MELIHAT NOMOR WA & CATATAN KERUSAKAN SEPATU) -->
    <div id="detailModal" class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm hidden items-center justify-center z-50 p-4">
        <div class="bg-white border border-slate-200/90 rounded-3xl p-8 max-w-lg w-full shadow-xl relative animate-in fade-in zoom-in duration-200">
            
            <!-- Tombol Close (X) -->
            <button onclick="closeDetailModal()" class="absolute top-6 right-6 w-8 h-8 rounded-full bg-slate-100 hover:bg-slate-200 flex items-center justify-center text-slate-600 font-bold transition">
                &times;
            </button>

            <!-- Header Modal Detail -->
            <div class="mb-6">
                <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1" id="detResi">CS-000000-000</p>
                <h3 class="text-xl font-extrabold text-slate-900">Detail Order Pelanggan</h3>
            </div>

            <!-- Informasi Lengkap -->
            <div class="space-y-4 text-sm mb-6 bg-slate-50 p-5 rounded-2xl border border-slate-100">
                <div class="flex justify-between border-b border-slate-200/60 pb-2">
                    <span class="text-slate-400 font-medium">Nama Pelanggan</span>
                    <span class="font-bold text-slate-900" id="detNama">-</span>
                </div>
                <div class="flex justify-between border-b border-slate-200/60 pb-2">
                    <span class="text-slate-400 font-medium">Nomor WhatsApp</span>
                    <span class="font-bold text-slate-900" id="detWa">-</span>
                </div>
                <div class="flex justify-between border-b border-slate-200/60 pb-2">
                    <span class="text-slate-400 font-medium">Jenis Sepatu</span>
                    <span class="font-bold text-slate-900" id="detSepatu">-</span>
                </div>
                <div class="flex justify-between border-b border-slate-200/60 pb-2">
                    <span class="text-slate-400 font-medium">Layanan</span>
                    <span class="font-bold text-slate-900" id="detLayanan">-</span>
                </div>
                <div class="flex justify-between pb-1">
                    <span class="text-slate-400 font-medium">Status</span>
                    <span class="font-bold text-slate-900" id="detStatus">-</span>
                </div>
            </div>

            <!-- Catatan Kerusakan Sepatu -->
            <div class="mb-6">
                <p class="text-xs font-semibold uppercase tracking-wider text-slate-500 mb-2">Catatan / Kondisi Sepatu</p>
                <div class="p-4 bg-amber-50/60 border border-amber-200/80 rounded-2xl text-slate-700 text-xs leading-relaxed" id="detCatatan">
                    -
                </div>
            </div>

            <!-- Tombol Tutup / Aksi Cepat ke WhatsApp -->
            <div class="flex gap-3">
                <a href="#" id="detWaButton" target="_blank" class="flex-1 py-3 bg-emerald-600 hover:bg-emerald-700 text-white text-center font-medium rounded-2xl transition text-sm shadow flex items-center justify-center gap-2">
                    Chat WhatsApp
                </a>
                <button type="button" onclick="closeDetailModal()" class="px-5 py-3 bg-slate-100 hover:bg-slate-200 text-slate-700 font-medium rounded-2xl transition text-sm">
                    Tutup
                </button>
            </div>

        </div>
    </div>

    <!-- MODAL EDIT DATA ORDER (POPUP LAMA) -->
    <div id="editModal" class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm hidden items-center justify-center z-50 p-4">
        <div class="bg-white border border-slate-200/90 rounded-3xl p-8 max-w-lg w-full shadow-xl relative animate-in fade-in zoom-in duration-200">
            
            <button onclick="closeModal()" class="absolute top-6 right-6 w-8 h-8 rounded-full bg-slate-100 hover:bg-slate-200 flex items-center justify-center text-slate-600 font-bold transition">
                &times;
            </button>

            <div class="mb-6">
                <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Edit Data Order</p>
                <h3 class="text-xl font-extrabold text-slate-900">Perbaiki data pelanggan</h3>
            </div>

            <div class="flex items-center gap-3 p-4 bg-slate-50 rounded-2xl border border-slate-100 mb-6">
                <div class="w-10 h-10 rounded-full bg-slate-900 text-white flex items-center justify-center font-bold text-xs" id="modalAvatar">
                    NP
                </div>
                <div>
                    <p class="font-bold text-slate-900 text-sm" id="modalNamaText">Nadia Putri</p>
                    <p class="text-xs text-slate-400" id="modalSubText">Nike Air Force 1 · Premium</p>
                </div>
            </div>

            <form action="" method="POST" class="space-y-4">
                <div>
                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-500 mb-2">Nama Pelanggan</label>
                    <input type="text" id="inputNama" name="nama" value="Nadia Putri" required
                        class="w-full px-4 py-3 bg-slate-50/50 border border-slate-200 rounded-2xl text-sm focus:outline-none focus:bg-white focus:ring-2 focus:ring-slate-900 transition">
                </div>

                <div class="pt-4 flex gap-3">
                    <button type="button" onclick="closeModal()" class="flex-1 py-3 bg-slate-100 hover:bg-slate-200 text-slate-700 font-medium rounded-2xl transition text-sm">
                        Batal
                    </button>
                    <button type="submit" class="flex-1 py-3 bg-slate-900 hover:bg-slate-800 text-white font-medium rounded-2xl transition text-sm shadow">
                        Simpan Perubahan
                    </button>
                </div>
            </form>

        </div>
    </div>

    <!-- SCRIPT JAVASCRIPT UNTUK MODAL DETAIL & EDIT -->
    <script>
        // Fungsi Modal Detail
        function openDetailModal(resi, nama, wa, sepatu, layanan, status, catatan) {
            document.getElementById('detailModal').classList.remove('hidden');
            document.getElementById('detailModal').classList.add('flex');
            
            document.getElementById('detResi').innerText = resi;
            document.getElementById('detNama').innerText = nama;
            document.getElementById('detWa').innerText = wa;
            document.getElementById('detSepatu').innerText = sepatu;
            document.getElementById('detLayanan').innerText = layanan;
            document.getElementById('detStatus').innerText = status;
            document.getElementById('detCatatan').innerText = catatan;

            // Sambungkan otomatis ke link WhatsApp Web
            let cleanWa = wa.replace(/^0/, '62'); // Ubah format 08xx jadi 628xx
            document.getElementById('detWaButton').href = `https://wa.me/${cleanWa}?text=Halo%20${nama},%20terkait%20perawatan%20sepatu%20${sepatu}%20di%20Patina%20Archive...`;
        }

        function closeDetailModal() {
            document.getElementById('detailModal').classList.remove('flex');
            document.getElementById('detailModal').classList.add('hidden');
        }

        // Fungsi Modal Edit
        function openModal(resi, nama, sepatu) {
            document.getElementById('editModal').classList.remove('hidden');
            document.getElementById('editModal').classList.add('flex');
            document.getElementById('modalNamaText').innerText = nama;
            document.getElementById('inputNama').value = nama;
            document.getElementById('modalSubText').innerText = sepatu + ' · Premium';
            
            let initials = nama.split(' ').map(n => n[0]).join('').substring(0, 2).toUpperCase();
            document.getElementById('modalAvatar').innerText = initials;
        }

        function closeModal() {
            document.getElementById('editModal').classList.remove('flex');
            document.getElementById('editModal').classList.add('hidden');
        }
    </script>

</body>
</html>