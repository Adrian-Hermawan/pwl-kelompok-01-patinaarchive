@extends('layouts.app')

@section('title', 'Cek Status Antrean - Patina Archive')

@section('content')

<main class="max-w-5xl mx-auto px-6 py-12">

    <!-- HEADER -->
    <div class="text-center max-w-2xl mx-auto mb-10">
        <p class="text-xs font-semibold uppercase tracking-widest text-slate-400 mb-2">
            Lacak Order
        </p>
        <h1 class="text-4xl font-extrabold text-slate-900 tracking-tight mb-2">
            Cek progres sepatu kamu.
        </h1>
        <p class="text-sm text-slate-500 font-normal">
            Masukkan nomor antrean yang tertera pada bukti pendaftaran.
        </p>
    </div>

    <!-- FORM PENCARIAN -->
    <form action="{{ route('cek-status') }}" method="GET"
        class="flex flex-col sm:flex-row items-center gap-3 w-full max-w-xl mx-auto bg-white border border-slate-200/90 p-2 rounded-3xl shadow-sm mb-12">

        <input type="text" name="resi" value="{{ $resi }}"
            placeholder="CS-261030-284" required
            class="flex-1 w-full px-4 py-3 bg-transparent text-slate-800 placeholder-slate-400 focus:outline-none text-sm font-medium">

        <button type="submit"
            class="w-full sm:w-auto px-7 py-3.5 bg-slate-900 text-white font-medium rounded-2xl shadow hover:bg-slate-800 transition text-sm">
            Cek Antrean &rarr;
        </button>
    </form>

    @if ($dataAntrean)

        <!-- KARTU STATUS -->
        <div class="bg-white border border-slate-200/80 rounded-3xl overflow-hidden shadow-sm max-w-4xl mx-auto">

            <!-- INFORMASI ANTREAN -->
            <div class="bg-slate-50/70 p-8 md:p-10 border-b border-slate-100">

                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
                    <div>
                        <p class="text-[11px] font-bold uppercase tracking-widest text-slate-400 mb-1">
                            Status Antrean
                        </p>
                        <h2 class="text-3xl md:text-4xl font-bold text-slate-900 tracking-tight">
                            {{ $dataAntrean['resi'] }}
                        </h2>
                    </div>

                    <div>
                        <span class="inline-block px-5 py-2.5 text-[11px] font-bold rounded-full border border-slate-900 text-slate-900 tracking-widest uppercase">
                            {{ $dataAntrean['status'] }}
                        </span>
                    </div>
                </div>

                <!-- DETAIL PELANGGAN -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-sm pt-2">

                    <div class="pr-2">
                        <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-2">
                            Pemilik
                        </p>
                        <p class="font-bold text-slate-900 text-base">
                            {{ $dataAntrean['nama'] }}
                        </p>
                        <p class="text-xs text-slate-400 mt-1">
                            {{ $dataAntrean['whatsapp'] }}
                        </p>
                    </div>

                    <div class="md:border-l md:border-slate-200/60 md:pl-6 pr-2">
                        <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-2">
                            Sepatu
                        </p>
                        <p class="font-bold text-slate-900 text-base">
                            {{ $dataAntrean['sepatu'] }}
                        </p>
                        <p class="text-xs text-slate-400 mt-1">
                            Warna {{ $dataAntrean['warna'] }}
                        </p>
                    </div>

                    <div class="md:border-l md:border-slate-200/60 md:pl-6 pr-2">
                        <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-2">
                            Layanan
                        </p>
                        <p class="font-bold text-slate-900 text-base">
                            {{ $dataAntrean['layanan'] }}
                        </p>
                        <p class="text-xs text-slate-400 mt-1">
                            {{ $dataAntrean['harga'] }}
                        </p>
                    </div>

                    <div class="md:border-l md:border-slate-200/60 md:pl-6">
                        <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-2">
                            Estimasi Selesai
                        </p>
                        <p class="font-bold text-slate-900 text-base">
                            {{ $dataAntrean['estimasi'] }}
                        </p>
                        <p class="text-xs text-slate-400 mt-1">
                            {{ $dataAntrean['waktu'] }}
                        </p>
                    </div>

                </div>
            </div>

            <!-- TIMELINE PROGRES -->
            <div class="p-8 md:p-10 bg-white">

                <div class="my-6 px-2 md:px-6">
                    <div class="relative flex items-center justify-between max-w-3xl mx-auto">

                        <div class="absolute left-6 right-1/2 top-6 h-0.5 bg-slate-900 z-0"></div>
                        <div class="absolute left-1/2 right-6 top-6 h-0.5 bg-slate-200 z-0"></div>

                        <!-- TAHAP 1 -->
                        <div class="relative z-10 flex flex-col items-center text-center">
                            <div class="w-12 h-12 rounded-2xl bg-slate-900 text-white flex items-center justify-center font-bold text-sm">
                                ✓
                            </div>
                            <span class="text-xs font-bold text-slate-900 mt-3">
                                Diterima
                            </span>
                            <span class="text-[11px] text-slate-400 mt-0.5">
                                Selesai
                            </span>
                        </div>

                        <!-- TAHAP 2 -->
                        <div class="relative z-10 flex flex-col items-center text-center">
                            <div class="w-12 h-12 rounded-2xl bg-slate-900 text-white flex items-center justify-center font-bold text-sm ring-4 ring-slate-100">
                                2
                            </div>
                            <span class="text-xs font-bold text-slate-900 mt-3">
                                Sedang Dikerjakan
                            </span>
                            <span class="text-[11px] text-slate-400 mt-0.5">
                                Berlangsung
                            </span>
                        </div>

                        <!-- TAHAP 3 -->
                        <div class="relative z-10 flex flex-col items-center text-center">
                            <div class="w-12 h-12 rounded-2xl bg-white border border-slate-300 text-slate-500 flex items-center justify-center font-semibold text-sm">
                                3
                            </div>
                            <span class="text-xs font-bold text-slate-900 mt-3">
                                Selesai
                            </span>
                            <span class="text-[11px] text-slate-400 mt-0.5">
                                Menunggu
                            </span>
                        </div>

                        <!-- TAHAP 4 -->
                        <div class="relative z-10 flex flex-col items-center text-center">
                            <div class="w-12 h-12 rounded-2xl bg-white border border-slate-300 text-slate-500 flex items-center justify-center font-semibold text-sm">
                                4
                            </div>
                            <span class="text-xs font-bold text-slate-900 mt-3">
                                Siap Diambil
                            </span>
                            <span class="text-[11px] text-slate-400 mt-0.5">
                                Menunggu
                            </span>
                        </div>

                    </div>
                </div>

                <!-- PESAN STATUS -->
                <div class="mt-12 bg-slate-50/80 rounded-xl p-5 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-2">
                    <span class="font-bold text-slate-900 text-sm">
                        Sepatumu sedang kami rawat.
                    </span>
                    <span class="text-slate-400">
                        Kami akan memperbarui status setelah proses pembersihan selesai.
                    </span>
                </div>

            </div>
        </div>

        <p class="text-center text-xs text-slate-400 mt-4">
            Data yang ditampilkan saat ini merupakan simulasi.
        </p>

    @elseif ($resi)

        <div class="max-w-xl mx-auto text-center bg-slate-50 rounded-2xl p-8">
            <p class="font-semibold text-slate-900">
                Nomor antrean belum ditemukan.
            </p>
            <p class="text-sm text-slate-500 mt-2">
                Silakan periksa kembali nomor antrean yang kamu masukkan.
            </p>
        </div>

    @endif

</main>

@endsection