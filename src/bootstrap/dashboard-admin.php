<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Patina Archive</title>
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
<body class="bg-white font-sans antialiased text-slate-900 min-h-screen flex flex-col justify-between p-8 md:p-12">

    <!-- BAGIAN ATAS (LOGO & MENU UTAMA) -->
    <div class="w-full max-w-5xl mx-auto space-y-8">
        
        <!-- Logo Brand -->
        <div class="flex items-center gap-3">
            <div class="bg-[#0B132B] text-white font-bold px-3.5 py-2 rounded-xl text-sm tracking-wide">PA</div>
            <span class="font-bold text-xl tracking-tight text-slate-900">Patina Archive</span>
        </div>

        <div class="border-b border-slate-100"></div>

        <!-- Navigasi Menu -->
        <div class="space-y-4">
            <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400">MENU UTAMA</p>
            
            <div class="space-y-3">
                <!-- Dashboard (Aktif Full Block Melengkung) -->
                <a href="dashboard-admin.php" class="flex items-center gap-4 w-full px-6 py-4 bg-[#0B132B] text-white font-medium rounded-2xl shadow-sm text-sm">
                    <svg class="w-4 h-4 text-white shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    Dashboard
                </a>
                
                <!-- Kelola Antrean -->
                <a href="kelola-antrean-admin.php" class="flex items-center gap-4 w-full px-6 py-4 text-slate-500 hover:bg-slate-50 hover:text-slate-900 font-medium rounded-2xl transition text-sm">
                    <svg class="w-4 h-4 text-slate-400 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7"></path></svg>
                    Kelola Antrean
                </a>
                
                <!-- Laporan Pendapatan -->
                <a href="laporan-pendapatan-admin.php" class="flex items-center gap-4 w-full px-6 py-4 text-slate-500 hover:bg-slate-50 hover:text-slate-900 font-medium rounded-2xl transition text-sm">
                    <svg class="w-4 h-4 text-slate-400 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                    Laporan Pendapatan
                </a>
            </div>
        </div>

    </div>

    <!-- BAGIAN BAWAH (PROFIL & TOMBOL KELUAR) -->
    <div class="w-full max-w-5xl mx-auto space-y-6 pt-12">
        <div class="border-t border-slate-100 pt-6">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-[#0B132B] text-white flex items-center justify-center font-bold text-xs">AD</div>
                <div>
                    <p class="text-xs font-bold text-slate-900">Admin</p>
                    <p class="text-[10px] text-slate-400">Pengelola</p>
                </div>
            </div>
        </div>

        <a href="login-admin.php" class="block w-full py-4 text-center border border-slate-200/80 hover:bg-slate-50 text-slate-900 font-medium rounded-2xl transition text-sm shadow-sm">
            Keluar
        </a>
    </div>

</body>
</html>