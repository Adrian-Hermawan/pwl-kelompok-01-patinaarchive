<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    // Menampilkan daftar layanan
    public function index(Request $request)
    {
        $layanans = Layanan::when($request->search, function ($query, $search) {
            $query->where('nama_layanan', 'like', "%{$search}%");
        })
        ->latest()
        ->paginate(10)
        ->withQueryString();

        return view('admin.layanan.index', compact('layanans'));
    }

    // Menampilkan form tambah layanan
    public function create()
    {
        return view('admin.layanan.create');
    }

    // Menyimpan layanan baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_layanan' => ['required', 'string', 'max:255'],
            'harga' => ['required', 'numeric', 'min:0'],
            'estimasi_waktu' => ['required', 'integer', 'min:1'],
            'deskripsi' => ['nullable', 'string'],
        ]);

        Layanan::create($validated);

        return redirect()
            ->route('layanan.index')
            ->with('success', 'Layanan berhasil ditambahkan.');
    }

    // Menampilkan form edit
    public function edit(Layanan $layanan)
    {
        return view('admin.layanan.edit', compact('layanan'));
    }

    // Memperbarui layanan
    public function update(Request $request, Layanan $layanan)
    {
        $validated = $request->validate([
            'nama_layanan' => ['required', 'string', 'max:255'],
            'harga' => ['required', 'numeric', 'min:0'],
            'estimasi_waktu' => ['required', 'integer', 'min:1'],
            'deskripsi' => ['nullable', 'string'],
        ]);

        $layanan->update($validated);

        return redirect()
            ->route('layanan.index')
            ->with('success', 'Layanan berhasil diperbarui.');
    }

    // Menghapus layanan
    public function destroy(Layanan $layanan)
    {
        if ($layanan->antreans()->exists()) {
            return redirect()
                ->route('layanan.index')
                ->with('error', 'Layanan tidak dapat dihapus karena sudah digunakan dalam antrean.');
        }

        $layanan->delete();

        return redirect()
            ->route('layanan.index')
            ->with('success', 'Layanan berhasil dihapus.');
    }
}