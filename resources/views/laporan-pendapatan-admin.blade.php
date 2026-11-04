<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patina Archive - Laporan Pendapatan</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 text-slate-900 min-h-screen">

    <div class="max-w-[1440px] mx-auto bg-white min-h-[960px] shadow-2xl my-4 rounded-3xl overflow-hidden border border-gray-200 flex">

        <!-- SIDEBAR -->
        <aside class="w-64 border-r border-gray-100 p-6 flex flex-col justify-between bg-white">

            <div class="space-y-8">

                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-slate-950 text-white flex items-center justify-center rounded-xl font-bold text-sm">
                        PA
                    </div>

                    <span class="font-bold text-xl tracking-tight text-slate-900">
                        Patina Archive
                    </span>
                </div>

                <nav class="space-y-2 text-xs font-semibold">

                    <a href="{{ route('dashboard-admin') }}"
                        class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 rounded-xl">
                        Menu Utama
                    </a>

                    <a href="{{ route('kelola-antrean-admin') }}"
                        class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-gray-50 rounded-xl">
                        Kelola Antrean
                    </a>

                    <a href="{{ route('laporan-pendapatan-admin') }}"
                        class="flex items-center gap-3 px-4 py-3 bg-slate-950 text-white rounded-xl">
                        Laporan Pendapatan
                    </a>

                </nav>

            </div>

            <!-- KEMBALI -->
            <div class="border-t border-gray-100 pt-4">
                <a href="{{ route('dashboard-admin') }}"
                    class="block text-center w-full border border-gray-200 py-2 rounded-xl text-xs font-medium hover:bg-gray-50">
                    Kembali ke Menu
                </a>
            </div>

        </aside>

        <!-- KONTEN GRAFIK PENDAPATAN -->
        <main class="flex-1 bg-gray-50 p-8 md:p-12 overflow-y-auto">

            <h1 class="text-3xl font-extrabold text-slate-900 mb-8">
                Laporan Pendapatan Bulanan
            </h1>

            <div class="bg-white p-8 rounded-2xl border border-gray-200 shadow-sm max-w-3xl">

                <span class="text-xs font-bold text-gray-400 uppercase">
                    REKAP PENDAPATAN OKTOBER 2025
                </span>

                <p class="text-4xl font-extrabold mt-2 mb-6">
                    Rp12.480.000
                </p>

                <!-- SIMULASI GRAFIK BATANG -->
                <div class="flex items-end gap-3 h-48 border-b border-gray-100 pb-2">

                    <div class="flex-1 bg-slate-950 h-[40%] rounded-t"></div>

                    <div class="flex-1 bg-slate-950 h-[65%] rounded-t"></div>

                    <div class="flex-1 bg-slate-950 h-[30%] rounded-t"></div>

                    <div class="flex-1 bg-slate-950 h-[85%] rounded-t"></div>

                    <div class="flex-1 bg-slate-950 h-[50%] rounded-t"></div>

                    <div class="flex-1 bg-slate-950 h-[95%] rounded-t"></div>

                    <div class="flex-1 bg-slate-950 h-[70%] rounded-t"></div>

                </div>

            </div>

        </main>

    </div>

</body>
</html>