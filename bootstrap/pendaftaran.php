<?php
$isSubmitted = false;
$dataStruk = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $isSubmitted = true;
    
    $paket = $_POST['paket'] ?? 'Deep Cleaning';
    $harga = 'Rp50.000';
    $estimasi = '2 - 3 Hari';
    
    if ($paket === 'Fast Cleaning') {
        $harga = 'Rp35.000';
        $estimasi = '1 Hari';
    } elseif ($paket === 'Unyellowing') {
        $harga = 'Rp75.000';
        $estimasi = '3 - 4 Hari';
    } elseif ($paket === 'Repaint') {
        $harga = 'Rp120.000';
        $estimasi = '4 - 5 Hari';
    }

    $dataStruk = [
        'nama' => htmlspecialchars($_POST['nama'] ?? ''),
        'whatsapp' => htmlspecialchars($_POST['whatsapp'] ?? ''),
        'merek' => htmlspecialchars($_POST['merek'] ?? ''),
        'paket' => htmlspecialchars($paket),
        'catatan' => htmlspecialchars($_POST['catatan'] ?? 'Tidak ada catatan'),
        'harga' => $harga,
        'estimasi' => $estimasi,
        'resi' => 'CS-' . date('ymd') . '-' . rand(100, 999)
    ];
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Antrean - Patina Archive</title>
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
                <a href="pendaftaran.php" class="text-slate-900 font-semibold border-b-2 border-slate-900 pb-1">Daftar Antrean</a>
                <a href="cek-status.php" class="text-slate-400 hover:text-slate-900 transition">Cek Status</a>
            </div>

            <div class="flex items-center gap-3">
                <a href="login-admin.php" class="px-5 py-2.5 text-sm font-medium border border-slate-200/80 rounded-full hover:bg-slate-50 transition text-slate-700">Masuk Admin</a>
                <a href="login-operator.php" class="px-5 py-2.5 text-sm font-medium border border-slate-200/80 rounded-full hover:bg-slate-50 transition text-slate-700">Masuk Operator</a>
            </div>
        </div>
    </nav>

    <!-- KONTEN UTAMA -->
    <main class="max-w-6xl mx-auto px-6 py-12">
        
        <?php if (!$isSubmitted): ?>
            <!-- HEADER -->
            <div class="mb-10">
                <p class="text-xs font-semibold uppercase tracking-widest text-slate-400 mb-2">Pendaftaran Online</p>
                <h1 class="text-4xl font-extrabold text-slate-900 tracking-tight mb-2">Daftarkan sepatu kamu.</h1>
                <p class="text-sm text-slate-500 font-normal">Isi data berikut untuk mendapatkan nomor antrean perawatan.</p>
            </div>

            <!-- KOTAK UTAMA FORM (Persis Figma) -->
            <div class="bg-white border border-slate-200/80 rounded-3xl p-8 md:p-12 shadow-sm mb-12">
                
                <div class="flex items-center gap-4 mb-8 pb-6 border-b border-slate-100">
                    <div class="w-10 h-10 rounded-full border border-slate-300 flex items-center justify-center text-sm font-medium text-slate-700">
                        01
                    </div>
                    <div>
                        <h3 class="font-bold text-slate-900 text-base">Data pelanggan & sepatu</h3>
                        <p class="text-xs text-slate-400 mt-0.5">Pastikan nomor WhatsApp dapat dihubungi.</p>
                    </div>
                </div>

                <form action="pendaftaran.php" method="POST" class="space-y-6">
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-slate-900 mb-2">Nama Lengkap</label>
                            <input type="text" name="nama" required placeholder="Masukkan nama lengkap"
                                class="w-full px-4.5 py-3.5 bg-slate-50/50 border border-slate-200/80 rounded-2xl text-sm placeholder-slate-400 focus:outline-none focus:bg-white focus:ring-2 focus:ring-slate-900 transition">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-900 mb-2">No. HP / WhatsApp</label>
                            <input type="text" name="whatsapp" required placeholder="08xx xxxx xxxx"
                                class="w-full px-4.5 py-3.5 bg-slate-50/50 border border-slate-200/80 rounded-2xl text-sm placeholder-slate-400 focus:outline-none focus:bg-white focus:ring-2 focus:ring-slate-900 transition">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-slate-900 mb-2">Merek / Jenis Sepatu</label>
                            <input type="text" name="merek" required placeholder="Contoh: Nike Air Force 1"
                                class="w-full px-4.5 py-3.5 bg-slate-50/50 border border-slate-200/80 rounded-2xl text-sm placeholder-slate-400 focus:outline-none focus:bg-white focus:ring-2 focus:ring-slate-900 transition">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-900 mb-2">Pilihan Layanan</label>
                            <select name="paket" required class="w-full px-4.5 py-3.5 bg-slate-50/50 border border-slate-200/80 rounded-2xl text-sm text-slate-500 focus:outline-none focus:bg-white focus:ring-2 focus:ring-slate-900 transition">
                                <option value="" disabled selected>Pilih paket layanan</option>
                                <option value="Deep Cleaning">Deep Cleaning</option>
                                <option value="Fast Cleaning">Fast Cleaning</option>
                                <option value="Unyellowing">Unyellowing</option>
                                <option value="Repaint">Repaint</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-slate-900 mb-2">Catatan (opsional)</label>
                        <textarea name="catatan" rows="3" placeholder="Contoh: noda utama di bagian midsole"
                            class="w-full px-4.5 py-3.5 bg-slate-50/50 border border-slate-200/80 rounded-2xl text-sm placeholder-slate-400 focus:outline-none focus:bg-white focus:ring-2 focus:ring-slate-900 transition"></textarea>
                    </div>

                    <div class="pt-4">
                        <button type="submit" class="w-full py-4 bg-slate-900 text-white font-medium rounded-2xl shadow-sm hover:bg-slate-800 transition text-sm flex items-center justify-center gap-2">
                            Daftar Antrean Sekarang &rarr;
                        </button>
                        <p class="text-center text-xs text-slate-400 mt-3 font-normal">Dengan mendaftar, kamu menyetujui estimasi waktu pengerjaan.</p>
                    </div>

                </form>

            </div>

        <?php else: ?>
            <!-- STRUK / PREVIEW PENDAFTARAN (Persis Figma) -->
            <div class="bg-white border border-slate-200/80 rounded-3xl p-8 md:p-12 shadow-sm mb-12 max-w-2xl mx-auto">
                
                <div class="flex items-center gap-4 mb-8 pb-6 border-b border-slate-100">
                    <div class="w-10 h-10 rounded-full bg-slate-900 text-white flex items-center justify-center text-sm font-bold">
                        ✓
                    </div>
                    <div>
                        <h3 class="font-bold text-slate-900 text-base">PREVIEW PENDAFTARAN</h3>
                        <p class="text-xs text-slate-400 mt-0.5">Nomor antrean berhasil dibuat.</p>
                    </div>
                </div>

                <div class="text-center py-6 border-b border-dashed border-slate-200 mb-8">
                    <p class="text-xs font-semibold uppercase tracking-widest text-slate-400 mb-2">Nomor Antrean</p>
                    <h2 class="text-4xl font-extrabold text-slate-900 tracking-tight"><?php echo $dataStruk['resi']; ?></h2>
                    <p class="text-xs text-slate-400 mt-2">Simpan nomor ini untuk melacak status.</p>
                </div>

                <div class="space-y-4 text-sm mb-8">
                    <div class="flex justify-between py-2 border-b border-slate-100">
                        <span class="text-slate-400">Nama</span>
                        <span class="font-medium text-slate-900"><?php echo $dataStruk['nama']; ?></span>
                    </div>
                    <div class="flex justify-between py-2 border-b border-slate-100">
                        <span class="text-slate-400">Sepatu</span>
                        <span class="font-medium text-slate-900"><?php echo $dataStruk['merek']; ?></span>
                    </div>
                    <div class="flex justify-between py-2 border-b border-slate-100">
                        <span class="text-slate-400">Layanan</span>
                        <span class="font-medium text-slate-900"><?php echo $dataStruk['paket']; ?></span>
                    </div>
                    <div class="flex justify-between py-2 border-b border-slate-100">
                        <span class="text-slate-400">Estimasi</span>
                        <span class="font-medium text-slate-900"><?php echo $dataStruk['estimasi']; ?></span>
                    </div>
                    <div class="flex justify-between py-2 border-b border-slate-100">
                        <span class="text-slate-400">Catatan</span>
                        <span class="font-medium text-slate-900"><?php echo $dataStruk['catatan']; ?></span>
                    </div>
                    <div class="flex justify-between py-2">
                        <span class="text-slate-400 font-semibold">Total</span>
                        <span class="font-bold text-slate-900"><?php echo $dataStruk['harga']; ?></span>
                    </div>
                </div>

                <div class="space-y-3">
                    <a href="cek-status.php?resi=<?php echo $dataStruk['resi']; ?>" class="w-full block py-4 text-center bg-slate-900 text-white font-medium rounded-2xl shadow hover:bg-slate-800 transition text-sm">
                        Cetak Status Antrean
                    </a>
                    <a href="pendaftaran.php" class="w-full block py-3 text-center bg-slate-100 text-slate-700 font-medium rounded-2xl hover:bg-slate-200 transition text-sm">
                        Daftar Antrean Lainnya
                    </a>
                </div>

                <div class="text-center mt-8">
                    <p class="text-xs text-slate-400">Patina Archive · Jl. Pendidikan No. 18</p>
                </div>
            </div>
        <?php endif; ?>

    </main>

</body>
</html>