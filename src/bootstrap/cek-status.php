<?php
$resi = isset($_GET['resi']) ? trim($_GET['resi']) : '';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Status Antrean - Patina Archive</title>
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
<body class="bg-white font-sans antialiased text-slate-900 selection:bg-slate-900 selection:text-white">

    <!-- NAVBAR -->
    <nav class="bg-white border-b border-slate-100 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-8 h-20 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <div class="bg-slate-900 text-white font-bold px-3 py-2 rounded-xl text-sm tracking-wide">PA</div>
                <span class="font-bold text-lg tracking-tight text-slate-900">Patina Archive</span>
            </div>
            
            <div class="hidden md:flex items-center space-x-12 text-sm font-medium">
                <a href="index.php" class="text-slate-400 hover:text-slate-900 transition">Beranda</a>
                <a href="pendaftaran.php" class="text-slate-400 hover:text-slate-900 transition">Daftar Antrean</a>
                <a href="cek-status.php" class="text-slate-900 font-semibold border-b-2 border-slate-900 pb-1">Cek Status</a>
            </div>

            <div class="flex items-center gap-3">
                <a href="login-admin.php" class="px-5 py-2.5 text-sm font-medium border border-slate-200/80 rounded-full hover:bg-slate-50 transition text-slate-700">Masuk Admin</a>
                <a href="login-operator.php" class="px-5 py-2.5 text-sm font-medium border border-slate-200/80 rounded-full hover:bg-slate-50 transition text-slate-700">Masuk Operator</a>
            </div>
        </div>
    </nav>

    <!-- KONTEN UTAMA -->
    <main class="max-w-5xl mx-auto px-6 py-12">
        
        <div class="text-center max-w-2xl mx-auto mb-10">
            <p class="text-xs font-semibold uppercase tracking-widest text-slate-400 mb-2">Lacak Order</p>
            <h1 class="text-4xl font-extrabold text-slate-900 tracking-tight mb-2">Cek progres sepatu kamu.</h1>
            <p class="text-sm text-slate-500 font-normal">Masukkan nomor antrean yang tertera pada bukti pendaftaran.</p>
        </div>

        <!-- FORM PENCARIAN -->
        <form action="cek-status.php" method="GET" class="flex flex-col sm:flex-row items-center gap-3 w-full max-w-xl mx-auto bg-white border border-slate-200/90 p-2 rounded-3xl shadow-sm mb-12">
            <input type="text" name="resi" value="<?php echo htmlspecialchars($resi); ?>" placeholder="CS-251008-014" required
                class="flex-1 px-4 py-3 bg-transparent text-slate-800 placeholder-slate-400 focus:outline-none text-sm font-medium">
            
            <button type="submit" class="w-full sm:w-auto px-7 py-3.5 bg-slate-900 text-white font-medium rounded-2xl shadow hover:bg-slate-800 transition text-sm flex items-center justify-center gap-2">
                Cek Antrean &rarr;
            </button>
        </form>

        <!-- KARTU STATUS PERSIS FIGMA -->
        <?php if (!empty($resi)): ?>
            <div class="bg-white border border-slate-200/80 rounded-3xl overflow-hidden shadow-sm max-w-4xl mx-auto">
                
                <!-- BAGIAN ATAS (BACKGROUND ABU-ABU MUDA) -->
                <div class="bg-slate-50/70 p-8 md:p-10 border-b border-slate-100">
                    
                    <!-- Header Resi & Status Pill -->
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
                        <div>
                            <p class="text-[11px] font-bold uppercase tracking-widest text-slate-400 mb-1">Status Antrean</p>
                            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 tracking-tight"><?php echo htmlspecialchars($resi); ?></h2>
                        </div>
                        <div>
                            <span class="inline-block px-5 py-2.5 text-[11px] font-bold rounded-full border border-slate-900 text-slate-900 tracking-widest uppercase">
                                Sedang Dikerjakan
                            </span>
                        </div>
                    </div>

                    <!-- Grid Informasi Detail -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-sm pt-2">
                        <!-- Pemilik -->
                        <div class="pr-2">
                            <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-2">Pemilik</p>
                            <p class="font-bold text-slate-900 text-base">Nadia Putri</p>
                            <p class="text-xs text-slate-400 mt-1">0812 3456 7890</p>
                        </div>
                        <!-- Sepatu -->
                        <div class="md:border-l md:border-slate-200/60 md:pl-6 pr-2">
                            <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-2">Sepatu</p>
                            <p class="font-bold text-slate-900 text-base">Nike Air Force 1</p>
                            <p class="text-xs text-slate-400 mt-1">Warna putih</p>
                        </div>
                        <!-- Layanan -->
                        <div class="md:border-l md:border-slate-200/60 md:pl-6 pr-2">
                            <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-2">Layanan</p>
                            <p class="font-bold text-slate-900 text-base">Premium</p>
                            <p class="text-xs text-slate-400 mt-1">Rp45.000</p>
                        </div>
                        <!-- Estimasi Selesai -->
                        <div class="md:border-l md:border-slate-200/60 md:pl-6">
                            <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-2">Estimasi Selesai</p>
                            <p class="font-bold text-slate-900 text-base">Hari ini</p>
                            <p class="text-xs text-slate-400 mt-1">16.00 WIB</p>
                        </div>
                    </div>

                </div>

                <!-- BAGIAN BAWAH (BACKGROUND PUTIH PROGRES TIMELINE) -->
                <div class="p-8 md:p-10 bg-white">
                    
                    <!-- Timeline Steps -->
                    <div class="my-6 px-6">
                        <div class="relative flex items-center justify-between max-w-3xl mx-auto">
                            <!-- Garis Hitam (Selesai/Aktif) - Diatur persis setinggi tengah icon (top-[24px]) -->
                            <div class="absolute left-6 right-1/2 top-[24px] h-0.5 bg-slate-900 z-0"></div>
                            <!-- Garis Abu-abu (Belum) -->
                            <div class="absolute left-1/2 right-6 top-[24px] h-0.5 bg-slate-200 z-0"></div>

                            <!-- Step 1: Diterima -->
                            <div class="relative z-10 flex flex-col items-center">
                                <div class="w-12 h-12 rounded-2xl bg-slate-900 text-white flex items-center justify-center font-bold text-sm shadow-sm">
                                    ✓
                                </div>
                                <span class="text-xs font-bold text-slate-900 mt-3">Diterima</span>
                                <span class="text-[11px] text-slate-400 mt-0.5">08 Okt · 10.20</span>
                            </div>

                            <!-- Step 2: Sedang Dikerjakan -->
                            <div class="relative z-10 flex flex-col items-center">
                                <div class="w-12 h-12 rounded-2xl bg-slate-900 text-white flex items-center justify-center font-bold text-sm shadow-md ring-4 ring-slate-100">
                                    2
                                </div>
                                <span class="text-xs font-bold text-slate-900 mt-3">Sedang Dikerjakan</span>
                                <span class="text-[11px] text-slate-400 mt-0.5">Sedang berlangsung</span>
                            </div>

                            <!-- Step 3: Selesai -->
                            <div class="relative z-10 flex flex-col items-center">
                                <div class="w-12 h-12 rounded-2xl bg-white border border-slate-300 text-slate-500 flex items-center justify-center font-semibold text-sm">
                                    3
                                </div>
                                <span class="text-xs font-bold text-slate-900 mt-3">Selesai</span>
                                <span class="text-[11px] text-slate-400 mt-0.5">Menunggu</span>
                            </div>

                            <!-- Step 4: Siap Diambil -->
                            <div class="relative z-10 flex flex-col items-center">
                                <div class="w-12 h-12 rounded-2xl bg-white border border-slate-300 text-slate-500 flex items-center justify-center font-semibold text-sm">
                                    4
                                </div>
                                <span class="text-xs font-bold text-slate-900 mt-3">Siap Diambil</span>
                                <span class="text-[11px] text-slate-400 mt-0.5">Menunggu</span>
                            </div>
                        </div>
                    </div>

                    <!-- Bar Pesan Status Bawah -->
                    <div class="mt-12 bg-slate-50/80 rounded-xl p-5 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-2">
                        <span class="font-bold text-slate-900 text-sm">Sepatumu sedang kami rawat.</span>
                        <span class="text-slate-400">Kami akan memperbarui status setelah proses pembersihan selesai.</span>
                    </div>

                </div>

            </div>
        <?php endif; ?>

    </main>

</body>
</html>