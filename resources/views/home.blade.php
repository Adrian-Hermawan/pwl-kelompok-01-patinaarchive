@extends('layouts.app')

@section('title', 'Patina Archive - Beranda')

@section('content')

<div class="max-w-[1440px] mx-auto bg-white min-h-[960px] shadow-2xl my-4 rounded-3xl overflow-hidden border border-gray-200">

    {{-- NAVBAR --}}
    <header class="flex justify-between items-center px-12 py-6 border-b border-gray-100 bg-white">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-slate-950 text-white flex items-center justify-center rounded-xl font-bold text-sm">
                PA
            </div>
            <span class="font-bold text-xl tracking-tight text-slate-900">
                Patina Archive
            </span>
        </div>

        <nav class="flex items-center gap-8 text-sm font-medium">
            <a href="{{ url('/') }}" class="text-slate-900 font-bold border-b-2 border-slate-950 pb-1">
                Beranda
            </a>

            <a href="{{ url('/pendaftaran') }}" class="text-slate-500 hover:text-slate-950">
                Daftar Antrean
            </a>

            <a href="{{ url('/cek-status') }}" class="text-slate-500 hover:text-slate-950">
                Cek Status
            </a>

            <div class="flex items-center gap-3 ml-4">
                <a href="{{ url('/login-admin') }}" class="px-4 py-2 border border-gray-200 rounded-xl hover:bg-gray-50 text-xs font-semibold">
                    Masuk Admin
                </a>

                <a href="{{ url('/login-operator') }}" class="px-4 py-2 border border-gray-200 rounded-xl hover:bg-gray-50 text-xs font-semibold">
                    Masuk Operator
                </a>
            </div>
        </nav>
    </header>

    {{-- HERO SECTION --}}
    <section class="px-16 py-16 grid grid-cols-2 gap-12 items-center">

        <div class="space-y-6">
            <span class="text-xs font-bold tracking-widest text-gray-400 uppercase">
                SISTEM ANTREAN CUCI SEPATU
            </span>

            <h1 class="text-5xl font-extrabold text-slate-900 leading-tight">
                Sepatu bersih,<br>tanpa ribet.
            </h1>

            <p class="text-gray-500 max-w-md text-sm leading-relaxed">
                Di Patina Archive, kami percaya sepatu bukan sekadar alas kaki,
                ia adalah arsip perjalanan. Kami merawat apa yang kalian lewati,
                mengembalikan nyawa pada rilisan lama agar siap menatap aspal kembali.
            </p>

            <div class="flex gap-4 pt-2">
                <a href="{{ url('/pendaftaran') }}"
                   class="bg-slate-950 text-white px-6 py-3.5 rounded-xl text-sm font-semibold hover:bg-slate-800 transition shadow-lg inline-flex items-center gap-2">
                    Daftar Antrean Sekarang &rarr;
                </a>

                <a href="{{ url('/cek-status') }}"
                   class="border border-gray-300 text-slate-800 px-6 py-3.5 rounded-xl text-sm font-semibold hover:bg-gray-50 transition inline-flex items-center">
                    Cek Status Antrean
                </a>
            </div>

            {{-- STATISTIK --}}
            <div class="pt-6 border-t border-gray-100 flex items-center gap-4">
                <span class="text-3xl font-extrabold text-slate-900">100+</span>
                <span class="text-xs text-gray-400 font-medium leading-snug">
                    pasang sepatu dirawat<br>setiap bulannya
                </span>
            </div>
        </div>

        {{-- ILUSTRASI SEPATU --}}
        <div class="relative bg-gray-50 border-2 border-dashed border-gray-200 rounded-3xl h-[480px] flex flex-col items-center justify-center p-8 overflow-hidden">

            <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-20">
                <div class="w-full h-[1px] bg-gray-400 rotate-12 absolute"></div>
                <div class="w-full h-[1px] bg-gray-400 -rotate-12 absolute"></div>
            </div>

            <div class="relative z-10 flex flex-col items-center justify-center my-auto">
                <svg class="w-56 h-40 text-slate-800"
                     fill="none"
                     stroke="currentColor"
                     stroke-width="2"
                     viewBox="0 0 200 120">

                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M10 90 C 20 50, 70 40, 110 40 C 140 40, 160 55, 180 70 C 190 75, 195 85, 190 95 C 185 105, 20 105, 10 90 Z" />

                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M10 90 C 40 110, 160 110, 190 95" />

                    <line x1="90" y1="65" x2="110" y2="85" stroke-linecap="round" />
                    <line x1="105" y1="63" x2="125" y2="83" stroke-linecap="round" />
                    <line x1="120" y1="60" x2="140" y2="80" stroke-linecap="round" />
                </svg>
            </div>

            <div class="absolute bottom-6 left-6 bg-white border border-gray-200 px-4 py-2 rounded-xl shadow-sm flex items-center gap-3 z-20">
                <span class="text-xs font-bold text-slate-900">01</span>
                <span class="text-xs text-gray-500 font-medium">Daftar secara online</span>
            </div>

            <span class="absolute bottom-6 right-6 text-[10px] font-bold text-gray-400 uppercase tracking-widest z-20">
                PLACEHOLDER FOTO SEPATU
            </span>
        </div>
    </section>

    {{-- TENTANG KAMI & LAYANAN --}}
    <section class="px-16 py-12 bg-gray-50 border-t border-gray-100">

        <div class="mb-10">
            <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">
                01 / TENTANG KAMI
            </span>

            <h2 class="text-2xl font-bold text-slate-900 mt-2">
                Setiap jejak punya cerita, jangan biarkan ia mati di debu kota.
            </h2>

            <p class="text-gray-500 text-xs mt-1">
                Kunjungi workshop kami di Jl. Uncle • Senin–Sabtu 09.00–20.00
            </p>
        </div>

        <div class="mb-4">
            <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">
                02 / LAYANAN & TARIF
            </span>

            <h2 class="text-2xl font-bold text-slate-900 mt-2">
                Pilih perawatan yang tepat
            </h2>
        </div>

        <div class="grid grid-cols-3 gap-6">

            {{-- LAYANAN REGULER --}}
            <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm flex flex-col justify-between">
                <div>
                    <div class="flex justify-between text-xs text-gray-400 font-medium">
                        <span>01</span>
                        <span>2–3 hari</span>
                    </div>

                    <h3 class="text-xl font-bold mt-2">Reguler</h3>
                    <p class="text-2xl font-extrabold text-slate-900 mt-1">Rp30.000</p>

                    <p class="text-xs text-gray-500 mt-4 leading-relaxed">
                        Pembersihan bagian luar dan sol untuk perawatan rutin sehari-hari.
                    </p>
                </div>

                <a href="{{ url('/pendaftaran') }}"
                   class="mt-8 block text-center border border-gray-300 py-2.5 rounded-xl font-semibold text-xs hover:bg-gray-50">
                    Pilih Layanan &rarr;
                </a>
            </div>

            {{-- LAYANAN PREMIUM --}}
            <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm flex flex-col justify-between">
                <div>
                    <div class="flex justify-between text-xs text-gray-400 font-medium">
                        <span>02</span>
                        <span>2–3 hari</span>
                    </div>

                    <h3 class="text-xl font-bold mt-2">Premium</h3>
                    <p class="text-2xl font-extrabold text-slate-900 mt-1">Rp45.000</p>

                    <p class="text-xs text-gray-500 mt-4 leading-relaxed">
                        Pembersihan menyeluruh bagian luar, sol, upper, dan tali sepatu.
                    </p>
                </div>

                <a href="{{ url('/pendaftaran') }}"
                   class="mt-8 block text-center border border-gray-300 py-2.5 rounded-xl font-semibold text-xs hover:bg-gray-50">
                    Pilih Layanan &rarr;
                </a>
            </div>

            {{-- LAYANAN DEEP CLEAN --}}
            <div class="bg-white p-6 rounded-2xl border border-gray-200 shadow-sm flex flex-col justify-between">
                <div>
                    <div class="flex justify-between text-xs text-gray-400 font-medium">
                        <span>03</span>
                        <span>3–4 hari</span>
                    </div>

                    <h3 class="text-xl font-bold mt-2">Deep Clean</h3>
                    <p class="text-2xl font-extrabold text-slate-900 mt-1">Rp60.000</p>

                    <p class="text-xs text-gray-500 mt-4 leading-relaxed">
                        Perawatan intensif hingga bagian dalam, un-yellowing, dan noda membandel.
                    </p>
                </div>

                <a href="{{ url('/pendaftaran') }}"
                   class="mt-8 block text-center border border-gray-300 py-2.5 rounded-xl font-semibold text-xs hover:bg-gray-50">
                    Pilih Layanan &rarr;
                </a>
            </div>

        </div>
    </section>

</div>

@endsection