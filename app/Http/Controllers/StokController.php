<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use Illuminate\Http\Request;

class StokController extends Controller
{
    public function index(Request $request)
    {
        $query = Stok::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where('nama_bahan', 'like', "%{$search}%")
                  ->orWhere('kategori', 'like', "%{$search}%");
        }

        if ($request->filled('kategori') && $request->kategori !== 'Semua') {
            $query->where('kategori', $request->kategori);
        }

        $stoks = $query->latest()->get();

        $stats = [
            'total' => Stok::count(),
            'aman' => Stok::where('status', 'Aman')->count(),
            'hampir_habis' => Stok::where('status', 'Hampir Habis')->count(),
            'habis' => Stok::where('status', 'Habis')->count(),
        ];

        return view('Stok', compact('stoks', 'stats'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_bahan' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'jumlah_stok' => 'required|integer|min:0',
            'satuan' => 'required|string|max:50',
            'stok_minimum' => 'nullable|integer|min:0',
        ]);

        $stokMinimum = $data['stok_minimum'] ?? 5;
        $data['stok_minimum'] = $stokMinimum;

        // Tentukan status otomatis
        if ($data['jumlah_stok'] <= 0) {
            $data['status'] = 'Habis';
        } elseif ($data['jumlah_stok'] <= $stokMinimum) {
            $data['status'] = 'Hampir Habis';
        } else {
            $data['status'] = 'Aman';
        }

        Stok::create($data);

        return redirect()->route('Stok')
            ->with('success', 'Bahan baku baru berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $stok = Stok::findOrFail($id);

        $data = $request->validate([
            'nama_bahan' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'jumlah_stok' => 'required|integer|min:0',
            'satuan' => 'required|string|max:50',
            'stok_minimum' => 'nullable|integer|min:0',
        ]);

        $stokMinimum = $data['stok_minimum'] ?? ($stok->stok_minimum ?: 5);
        $data['stok_minimum'] = $stokMinimum;

        if ($data['jumlah_stok'] <= 0) {
            $data['status'] = 'Habis';
        } elseif ($data['jumlah_stok'] <= $stokMinimum) {
            $data['status'] = 'Hampir Habis';
        } else {
            $data['status'] = 'Aman';
        }

        $stok->update($data);

        return redirect()->route('Stok')
            ->with('success', 'Data stok bahan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $stok = Stok::findOrFail($id);
        $stok->delete();

        return redirect()->route('Stok')
            ->with('success', 'Bahan baku berhasil dihapus.');
    }
}
