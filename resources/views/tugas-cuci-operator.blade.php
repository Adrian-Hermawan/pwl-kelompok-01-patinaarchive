<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antrean Tugas Cuci - Panel Operator Patina Archive</title>
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
        
        <!-- SIDEBAR OPERATOR -->
        <aside class="w-72 bg-white border-r border-slate-200 hidden md:flex flex-col justify-between py-6 shrink-0">
            <div>
                <!-- Logo Brand -->
                <div class="flex items-center gap-3 px-8 pb-6">
                    <div class="bg-[#0B132B] text-white font-bold px-3.5 py-2 rounded-xl text-sm tracking-wide">PA</div>
                    <span class="font-bold text-lg tracking-tight text-slate-900">Patina Archive</span>
                </div>
                <div class="border-b border-slate-100 mb-6"></div>

                <!-- Navigasi Menu -->
                <div class="px-5 space-y-6">
                    <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 px-3">MENU UTAMA</p>
                    
                    <div class="space-y-2">
                        <a href="tugas-cuci-operator.php" class="flex items-center gap-3.5 w-full px-5 py-4 bg-[#0B132B] text-white font-medium rounded-2xl shadow-sm text-sm">
                            <svg class="w-4 h-4 text-white shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7"></path></svg>
                            Tugas Cuci
                        </a>
                    </div>
                </div>
            </div>

            <!-- Bagian Bawah -->
            <div class="px-5 space-y-6">
                <div class="border-t border-slate-100 pt-6">
                    <div class="flex items-center gap-3 px-3">
                        <div class="w-10 h-10 rounded-full bg-[#0B132B] text-white flex items-center justify-center font-bold text-xs">OP</div>
                        <div>
                            <p class="text-xs font-bold text-slate-900">Operator</p>
                            <p class="text-[10px] text-slate-400">Petugas Pengerjaan</p>
                        </div>
                    </div>
                </div>
                <a href="login-operator.php" class="block w-full py-4 text-center border border-slate-200/90 hover:bg-slate-50 text-slate-900 font-medium rounded-2xl transition text-sm shadow-sm">
                    Keluar
                </a>
            </div>
        </aside>

        <!-- KONTEN UTAMA TUGAS CUCI -->
        <main class="flex-1 flex flex-col min-w-0 overflow-y-auto p-6 lg:p-10 space-y-8">
            
            <!-- Header Halaman -->
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div>
                    <p class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-1">Rabu, 8 Oktober 2025 · Shift Pagi</p>
                    <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight">Antrean tugas cuci</h1>
                    <p class="text-sm text-slate-500 mt-1">Kerjakan sesuai urutan dan perbarui progres setiap tugas.</p>
                </div>
                <div class="bg-white px-5 py-3 rounded-2xl border border-slate-200/80 shadow-sm shrink-0">
                    <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400">Operator Aktif</p>
                    <p class="text-sm font-extrabold text-slate-900">Rizky Maulana</p>
                </div>
            </div>

            <!-- 4 KOTAK STATISTIK -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                <div class="bg-white p-5 rounded-3xl border border-slate-200/80 shadow-sm">
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-1.5">TUGAS DITAMPILKAN</p>
                    <h3 class="text-3xl font-extrabold text-slate-900">5</h3>
                    <p class="text-xs text-slate-400 mt-1.5">Antrean aktif hari ini</p>
                </div>
                <div class="bg-white p-5 rounded-3xl border border-slate-200/80 shadow-sm">
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-1.5">DITERIMA</p>
                    <h3 class="text-3xl font-extrabold text-slate-900">2</h3>
                    <p class="text-xs text-slate-400 mt-1.5">Menunggu dikerjakan</p>
                </div>
                <div class="bg-white p-5 rounded-3xl border border-slate-200/80 shadow-sm">
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-1.5">SEDANG DIKERJAKAN</p>
                    <h3 class="text-3xl font-extrabold text-slate-900">2</h3>
                    <p class="text-xs text-slate-400 mt-1.5">Dalam proses perawatan</p>
                </div>
                <div class="bg-white p-5 rounded-3xl border border-slate-200/80 shadow-sm">
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-1.5">SELESAI</p>
                    <h3 class="text-3xl font-extrabold text-slate-900">1</h3>
                    <p class="text-xs text-slate-400 mt-1.5">Menunggu admin</p>
                </div>
            </div>

            <!-- TABEL DAFTAR TUGAS PERAWATAN -->
            <div class="bg-white border border-slate-200/80 rounded-3xl p-6 md:p-8 shadow-sm">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6 pb-6 border-b border-slate-100">
                    <div>
                        <h3 class="font-bold text-slate-900 text-base">Daftar tugas perawatan</h3>
                        <p class="text-xs text-slate-400 mt-0.5">Prioritaskan order dengan tenggat waktu paling dekat.</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <input type="text" placeholder="Cari nomor atau sepatu" class="px-4 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:outline-none focus:ring-2 focus:ring-[#0B132B]">
                        <select class="px-4 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-600 focus:outline-none">
                            <option>Semua status</option>
                            <option>Diterima</option>
                            <option>Sedang dikerjakan</option>
                            <option>Selesai</option>
                        </select>
                    </div>
                </div>

                <!-- Tabel Berpenataan Rapi dengan Format Tanggal Lengkap -->
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm whitespace-nowrap">
                        <thead>
                            <tr class="text-[11px] font-bold uppercase tracking-wider text-slate-400 border-b border-slate-100 pb-3">
                                <th class="pb-3 pr-4">No. Antrean</th>
                                <th class="pb-3 px-4">Pelanggan / Sepatu</th>
                                <th class="pb-3 px-4">Layanan</th>
                                <th class="pb-3 px-4">Status</th>
                                <th class="pb-3 px-4">Harus Selesai Sebelum</th>
                                <th class="pb-3 px-4 text-center">Catatan</th>
                                <th class="pb-3 pl-4 text-right">Aksi Berikutnya</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            <tr>
                                <td class="py-4 pr-4 font-bold text-slate-900">CS-251008-014</td>
                                <td class="py-4 px-4">
                                    <p class="font-bold text-slate-900">Nadia Putri</p>
                                    <p class="text-xs text-slate-400">Nike Air Force 1</p>
                                </td>
                                <td class="py-4 px-4 font-medium text-slate-700">Premium</td>
                                <td class="py-4 px-4">
                                    <span class="inline-block px-3.5 py-1 bg-slate-100 text-slate-800 text-xs font-semibold rounded-full border border-slate-200">Sedang dikerjakan</span>
                                </td>
                                <td class="py-4 px-4 text-slate-600">08 Okt, 16.00</td>
                                <td class="py-4 px-4 text-center">
                                    <button onclick="openCatatanModal('CS-251008-014', 'Nadia Putri', 'Nike Air Force 1', 'Noda utama di bagian midsole cukup pekat, perlu perhatian khusus pada unyellowing.')" class="px-3.5 py-1.5 bg-slate-100 border border-slate-200 text-slate-700 font-medium rounded-xl hover:bg-slate-200 transition text-xs">
                                        Detail
                                    </button>
                                </td>
                                <td class="py-4 pl-4 text-right">
                                    <button onclick="openModal('CS-251008-014', 'Nadia Putri', 'Nike Air Force 1')" class="px-5 py-2.5 bg-[#0B132B] hover:bg-slate-800 text-white font-medium rounded-xl transition text-xs shadow">
                                        Tandai Selesai
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-4 pr-4 font-bold text-slate-900">CS-251008-013</td>
                                <td class="py-4 px-4">
                                    <p class="font-bold text-slate-900">Raka Pratama</p>
                                    <p class="text-xs text-slate-400">Adidas Samba</p>
                                </td>
                                <td class="py-4 px-4 font-medium text-slate-700">Deep Clean</td>
                                <td class="py-4 px-4">
                                    <span class="inline-block px-3.5 py-1 bg-slate-100 text-slate-800 text-xs font-semibold rounded-full border border-slate-200">Diterima</span>
                                </td>
                                <td class="py-4 px-4 text-slate-600">09 Okt, 12.00</td>
                                <td class="py-4 px-4 text-center">
                                    <button onclick="openCatatanModal('CS-251008-013', 'Raka Pratama', 'Adidas Samba', 'Suede sensitif terhadap air berlebih, gunakan dry cleaning.')" class="px-3.5 py-1.5 bg-slate-100 border border-slate-200 text-slate-700 font-medium rounded-xl hover:bg-slate-200 transition text-xs">
                                        Detail
                                    </button>
                                </td>
                                <td class="py-4 pl-4 text-right">
                                    <button class="px-5 py-2.5 bg-[#0B132B] hover:bg-slate-800 text-white font-medium rounded-xl transition text-xs shadow">
                                        Mulai Kerjakan
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-4 pr-4 font-bold text-slate-900">CS-251008-010</td>
                                <td class="py-4 px-4">
                                    <p class="font-bold text-slate-900">Bayu Aji</p>
                                    <p class="text-xs text-slate-400">Vans Old Skool</p>
                                </td>
                                <td class="py-4 px-4 font-medium text-slate-700">Reguler</td>
                                <td class="py-4 px-4">
                                    <span class="inline-block px-3.5 py-1 bg-slate-100 text-slate-800 text-xs font-semibold rounded-full border border-slate-200">Diterima</span>
                                </td>
                                <td class="py-4 px-4 text-slate-600">09 Okt, 15.00</td>
                                <td class="py-4 px-4 text-center">
                                    <button onclick="openCatatanModal('CS-251008-010', 'Bayu Aji', 'Vans Old Skool', 'Tidak ada catatan khusus, cucian standar.')" class="px-3.5 py-1.5 bg-slate-100 border border-slate-200 text-slate-700 font-medium rounded-xl hover:bg-slate-200 transition text-xs">
                                        Detail
                                    </button>
                                </td>
                                <td class="py-4 pl-4 text-right">
                                    <button class="px-5 py-2.5 bg-[#0B132B] hover:bg-slate-800 text-white font-medium rounded-xl transition text-xs shadow">
                                        Mulai Kerjakan
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-4 pr-4 font-bold text-slate-900">CS-251008-009</td>
                                <td class="py-4 px-4">
                                    <p class="font-bold text-slate-900">Mira Sari</p>
                                    <p class="text-xs text-slate-400">Puma Palermo</p>
                                </td>
                                <td class="py-4 px-4 font-medium text-slate-700">Premium</td>
                                <td class="py-4 px-4">
                                    <span class="inline-block px-3.5 py-1 bg-slate-100 text-slate-800 text-xs font-semibold rounded-full border border-slate-200">Sedang dikerjakan</span>
                                </td>
                                <td class="py-4 px-4 text-slate-600">08 Okt, 17.30</td>
                                <td class="py-4 px-4 text-center">
                                    <button onclick="openCatatanModal('CS-251008-009', 'Mira Sari', 'Puma Palermo', 'Bersihkan bagian upper dengan hati-hati.')" class="px-3.5 py-1.5 bg-slate-100 border border-slate-200 text-slate-700 font-medium rounded-xl hover:bg-slate-200 transition text-xs">
                                        Detail
                                    </button>
                                </td>
                                <td class="py-4 pl-4 text-right">
                                    <button onclick="openModal('CS-251008-009', 'Mira Sari', 'Puma Palermo')" class="px-5 py-2.5 bg-[#0B132B] hover:bg-slate-800 text-white font-medium rounded-xl transition text-xs shadow">
                                        Tandai Selesai
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-4 pr-4 font-bold text-slate-900">CS-251008-008</td>
                                <td class="py-4 px-4">
                                    <p class="font-bold text-slate-900">Fajar N.</p>
                                    <p class="text-xs text-slate-400">Asics Gel-1130</p>
                                </td>
                                <td class="py-4 px-4 font-medium text-slate-700">Deep Clean</td>
                                <td class="py-4 px-4">
                                    <span class="inline-block px-3.5 py-1 bg-[#0B132B] text-white text-xs font-semibold rounded-full">Selesai</span>
                                </td>
                                <td class="py-4 px-4 text-slate-600">Selesai</td>
                                <td class="py-4 px-4 text-center">
                                    <button onclick="openCatatanModal('CS-251008-008', 'Fajar N.', 'Asics Gel-1130', 'Sudah selesai dikerjakan dan lolos QC.')" class="px-3.5 py-1.5 bg-slate-100 border border-slate-200 text-slate-700 font-medium rounded-xl hover:bg-slate-200 transition text-xs">
                                        Detail
                                    </button>
                                </td>
                                <td class="py-4 pl-4 text-right text-xs text-slate-400 font-medium">Tidak ada aksi lanjutan</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- PANDUAN ALUR TUGAS -->
            <div class="bg-white border border-slate-200/80 rounded-3xl p-8 shadow-sm">
                <h3 class="font-bold text-slate-900 text-base mb-1">Panduan alur tugas</h3>
                <p class="text-xs text-slate-400 mb-6">Tiga langkah, progres selalu tercatat.</p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-4 border-t border-slate-100">
                    <div>
                        <span class="text-xs font-extrabold text-slate-400">01</span>
                        <h4 class="font-bold text-slate-900 text-sm mt-1">Terima tugas</h4>
                        <p class="text-xs text-slate-500 mt-1">Periksa detail sepatu dan layanan.</p>
                    </div>
                    <div>
                        <span class="text-xs font-extrabold text-slate-400">02</span>
                        <h4 class="font-bold text-slate-900 text-sm mt-1">Mulai kerjakan</h4>
                        <p class="text-xs text-slate-500 mt-1">Ubah status saat proses dimulai.</p>
                    </div>
                    <div>
                        <span class="text-xs font-extrabold text-slate-400">03</span>
                        <h4 class="font-bold text-slate-900 text-sm mt-1">Tandai selesai</h4>
                        <p class="text-xs text-slate-500 mt-1">Pastikan hasil sudah dicek ulang.</p>
                    </div>
                </div>
            </div>

        </main>

    </div>

    <!-- MODAL CATATAN NODA / KERUSAKAN SEPATU -->
    <div id="catatanModal" class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm hidden items-center justify-center z-50 p-4">
        <div class="bg-white border border-slate-200/90 rounded-3xl p-8 max-w-lg w-full shadow-xl relative animate-in fade-in zoom-in duration-200">
            
            <button onclick="closeCatatanModal()" class="absolute top-6 right-6 w-8 h-8 rounded-full bg-slate-100 hover:bg-slate-200 flex items-center justify-center text-slate-600 font-bold transition">
                &times;
            </button>

            <div class="mb-6">
                <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1" id="catatanResi">CS-000000-000</p>
                <h3 class="text-xl font-extrabold text-slate-900">Catatan Noda & Perawatan</h3>
            </div>

            <div class="flex items-center gap-3 p-4 bg-slate-50 rounded-2xl border border-slate-100 mb-6">
                <div class="w-10 h-10 rounded-full bg-[#0B132B] text-white flex items-center justify-center font-bold text-xs" id="catatanAvatar">NP</div>
                <div>
                    <p class="font-bold text-slate-900 text-sm" id="catatanNama">Nadia Putri</p>
                    <p class="text-xs text-slate-400" id="catatanSepatu">Nike Air Force 1</p>
                </div>
            </div>

            <div class="mb-6">
                <label class="block text-xs font-semibold uppercase tracking-wider text-slate-500 mb-2">Detail Kondisi / Catatan Pelanggan</label>
                <div class="p-4 bg-amber-50/60 border border-amber-200/80 rounded-2xl text-slate-700 text-xs leading-relaxed" id="catatanTeks">
                    -
                </div>
            </div>

            <div class="flex">
                <button type="button" onclick="closeCatatanModal()" class="w-full py-3 bg-[#0B132B] hover:bg-slate-800 text-white font-medium rounded-2xl transition text-sm shadow">
                    Tutup
                </button>
            </div>

        </div>
    </div>

    <!-- MODAL KONFIRMASI STATUS -->
    <div id="selesaiModal" class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm hidden items-center justify-center z-50 p-4">
        <div class="bg-white border border-slate-200/90 rounded-3xl p-8 max-w-lg w-full shadow-xl relative">
            <button onclick="closeModal()" class="absolute top-6 right-6 w-8 h-8 rounded-full bg-slate-100 hover:bg-slate-200 flex items-center justify-center text-slate-600 font-bold transition">
                &times;
            </button>

            <div class="mb-6">
                <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Konfirmasi Status</p>
                <h3 class="text-xl font-extrabold text-slate-900">Tandai tugas selesai?</h3>
            </div>

            <div class="flex items-center gap-3 p-4 bg-slate-50 rounded-2xl border border-slate-100 mb-4">
                <div class="w-10 h-10 rounded-full bg-[#0B132B] text-white flex items-center justify-center font-bold text-xs" id="modalAvatar">NP</div>
                <div>
                    <p class="font-bold text-slate-900 text-sm" id="modalResi">CS-251008-014</p>
                    <p class="text-xs text-slate-400" id="modalSubText">Nadia Putri · Premium</p>
                </div>
            </div>

            <p class="text-xs text-slate-500 mb-6 leading-relaxed">
                Pastikan sepatu telah selesai dibersihkan dan melalui pengecekan akhir.
            </p>

            <div class="flex gap-3">
                <button type="button" onclick="closeModal()" class="flex-1 py-3 bg-slate-100 hover:bg-slate-200 text-slate-700 font-medium rounded-2xl transition text-sm">
                    Batal
                </button>
                <button type="button" onclick="alert('Status tugas berhasil diperbarui!'); closeModal();" class="flex-1 py-3 bg-[#0B132B] hover:bg-slate-800 text-white font-medium rounded-2xl transition text-sm shadow">
                    Tandai Selesai
                </button>
            </div>
        </div>
    </div>

    <!-- SCRIPT MODAL -->
    <script>
        function openCatatanModal(resi, nama, sepatu, catatan) {
            document.getElementById('catatanModal').classList.remove('hidden');
            document.getElementById('catatanModal').classList.add('flex');
            
            document.getElementById('catatanResi').innerText = resi;
            document.getElementById('catatanNama').innerText = nama;
            document.getElementById('catatanSepatu').innerText = sepatu;
            document.getElementById('catatanTeks').innerText = catatan;
            
            let initials = nama.split(' ').map(n => n[0]).join('').substring(0, 2).toUpperCase();
            document.getElementById('catatanAvatar').innerText = initials;
        }

        function closeCatatanModal() {
            document.getElementById('catatanModal').classList.remove('flex');
            document.getElementById('catatanModal').classList.add('hidden');
        }

        function openModal(resi, nama, sepatu) {
            document.getElementById('selesaiModal').classList.remove('hidden');
            document.getElementById('selesaiModal').classList.add('flex');
            document.getElementById('modalResi').innerText = resi;
            document.getElementById('modalSubText').innerText = nama + ' · ' + sepatu;
            
            let initials = nama.split(' ').map(n => n[0]).join('').substring(0, 2).toUpperCase();
            document.getElementById('modalAvatar').innerText = initials;
        }

        function closeModal() {
            document.getElementById('selesaiModal').classList.remove('flex');
            document.getElementById('selesaiModal').classList.add('hidden');
        }
    </script>

</body>
</html>