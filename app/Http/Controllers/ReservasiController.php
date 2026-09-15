<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use App\Models\Meja;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    // HALAMAN MEJA & RESERVASI
    public function index(Request $request)
    {
        $mejas = Meja::orderBy('nomor_meja')->get();

        $reservasis = Reservasi::latest()->get();

        $stats = [
            'total_meja' => Meja::count(),
            'kosong' => Meja::where('status', 'Kosong')->count(),
            'terisi' => Meja::where('status', 'Terisi')->count(),
            'reservasi' => Meja::where('status', 'Reservasi')->count(),

            'total_reservasi' => Reservasi::count(),
            'reservasi_menunggu' => Reservasi::where('status', 'Menunggu')->count(),
            'reservasi_dikonfirmasi' => Reservasi::where('status', 'Dikonfirmasi')->count(),
        ];

        return view(
            'Meja&Reservasi',
            compact('mejas', 'reservasis', 'stats')
        );
    }


    // TAMBAH MEJA
    public function storeMeja(Request $request)
    {
        $data = $request->validate([
            'nomor_meja' => 'required|string|max:255|unique:mejas,nomor_meja',
            'kapasitas' => 'required|string|max:255',
            'status' => 'required|string|in:Kosong,Terisi,Reservasi',
            'lokasi' => 'required|string|in:Indoor,Outdoor',
            'keterangan' => 'nullable|string',
        ]);

        Meja::create($data);

        return redirect()
            ->route('Meja&Reservasi')
            ->with('success', 'Meja berhasil ditambahkan.');
    }


    // EDIT MEJA
    public function updateMeja(Request $request, $id)
    {
        $meja = Meja::findOrFail($id);

        $data = $request->validate([
            'nomor_meja' => 'required|string|max:255|unique:mejas,nomor_meja,' . $meja->id,
            'kapasitas' => 'required|string|max:255',
            'status' => 'required|string|in:Kosong,Terisi,Reservasi',
            'lokasi' => 'required|string|in:Indoor,Outdoor',
            'keterangan' => 'nullable|string',
        ]);

        $meja->update($data);

        return redirect()
            ->route('Meja&Reservasi')
            ->with('success', 'Meja berhasil diperbarui.');
    }


    // HAPUS MEJA
    public function destroyMeja($id)
    {
        $meja = Meja::findOrFail($id);

        $meja->delete();

        return redirect()
            ->route('Meja&Reservasi')
            ->with('success', 'Meja berhasil dihapus.');
    }


    // SIMPAN RESERVASI DARI LANDING
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'telepon' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'jam' => 'required',
            'orang' => 'required|numeric|min:1',

            'lokasi' => 'required|string|in:Indoor,Outdoor',

            'meja' => 'nullable|string|max:255',
            'catatan' => 'nullable|string',
        ]);

        // Status otomatis
        $data['status'] = 'Menunggu';

        Reservasi::create($data);

        return back()->with(
            'success',
            'Reservasi berhasil dikirim.'
        );
    }


    // UPDATE RESERVASI
    public function update(Request $request, $id)
    {
        $reservasi = Reservasi::findOrFail($id);

        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'telepon' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'jam' => 'required',
            'orang' => 'required|numeric|min:1',

            'lokasi' => 'required|string|in:Indoor,Outdoor',

            'meja' => 'nullable|string|max:255',
            'catatan' => 'nullable|string',

            'status' => 'required|string|in:Menunggu,Dikonfirmasi,Selesai,Dibatalkan',
        ]);

        $reservasi->update($data);

        return redirect()
            ->route('Meja&Reservasi')
            ->with('success', 'Reservasi berhasil diperbarui.');
    }


    // HAPUS RESERVASI
    public function destroy($id)
    {
        $reservasi = Reservasi::findOrFail($id);

        $reservasi->delete();

        return redirect()
            ->route('Meja&Reservasi')
            ->with('success', 'Reservasi berhasil dihapus.');
    }
}