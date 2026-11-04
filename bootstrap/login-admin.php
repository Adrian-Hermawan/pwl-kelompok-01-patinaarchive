<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patina Archive - Login Admin</title>
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
<body class="bg-slate-50 font-sans antialiased text-slate-900 h-screen overflow-hidden">

    <div class="grid grid-cols-1 lg:grid-cols-2 h-full w-full">
        
        <!-- SISI KIRI (BANNER GELAP) -->
        <div class="bg-[#0B132B] text-white p-8 lg:p-12 flex flex-col justify-between h-full">
            <div class="space-y-3">
                <div class="flex items-center gap-2 mb-6">
                    <div class="bg-white text-[#0B132B] font-bold px-3 py-1.5 rounded-xl text-xs tracking-wide">PA</div>
                    <span class="font-bold text-base tracking-tight">Patina Archive</span>
                </div>
                <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400">SISTEM PENGELOLAAN</p>
                <h1 class="text-3xl lg:text-4xl font-extrabold tracking-tight leading-tight">
                    Satu tempat untuk mengelola layanan.
                </h1>
            </div>
            <p class="text-xs text-slate-500">Patina Archive System &copy; 2026</p>
        </div>

        <!-- SISI KANAN (FORM LOGIN) -->
        <div class="bg-white p-8 lg:p-12 flex items-center justify-center relative h-full">
            
            <!-- TOMBOL KEMBALI -->
            <a href="index.php" class="absolute top-6 right-6 flex items-center gap-2 text-xs font-semibold text-slate-500 hover:text-slate-900 bg-slate-100 hover:bg-slate-200 px-4 py-2 rounded-xl transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Kembali
            </a>

            <div class="w-full max-w-md space-y-6">
                
                <div>
                    <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">AKSES INTERNAL</p>
                    <h2 class="text-2xl lg:text-3xl font-extrabold text-slate-900 tracking-tight">Masuk Admin / Kasir</h2>
                </div>

                <form action="dashboard-admin.php" method="POST" class="space-y-5">
                    
                    <!-- INPUT NAMA PENGGUNA -->
                    <div class="space-y-1.5">
                        <label for="username" class="block text-xs font-medium text-slate-700">Nama pengguna</label>
                        <input type="text" id="username" name="username" value="admin.patina" required
                            class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm text-slate-900 focus:outline-none focus:ring-2 focus:ring-[#0B132B] focus:bg-white transition">
                    </div>

                    <!-- INPUT KATA SANDI -->
                    <div class="space-y-1.5">
                        <label for="password" class="block text-xs font-medium text-slate-700">Kata sandi</label>
                        <input type="password" id="password" name="password" placeholder="••••••••" required
                            class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm text-slate-900 focus:outline-none focus:ring-2 focus:ring-[#0B132B] focus:bg-white transition">
                    </div>

                    <!-- TOMBOL MASUK -->
                    <button type="submit" 
                        class="w-full py-3.5 bg-[#0B132B] hover:bg-slate-800 text-white font-medium rounded-xl shadow-md transition text-sm flex items-center justify-center gap-2">
                        Masuk ke Dashboard Admin &rarr;
                    </button>

                </form>

            </div>
        </div>

    </div>

</body>
</html>