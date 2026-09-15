<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class menuController extends Controller
{
    public function index(Request $request)
    {
        $query = Menu::query();

        if ($request->filled('kategori') && $request->kategori !== 'Semua') {
            $query->where('kategori', $request->kategori);
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where('nama', 'like', "%{$search}%");
        }

        $menus = $query->latest()->get();

        $stats = [
            'total' => Menu::count(),
            'makanan' => Menu::where('kategori', 'Makanan')->count(),
            'minuman' => Menu::where('kategori', 'Minuman')->count(),
            'tersedia' => Menu::where('stok', '>', 0)->count(),
            'habis' => Menu::where('stok', '<=', 0)->count(),
        ];

        return view('Menu', compact('menus', 'stats'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'deskripsi' => 'nullable|string',
            'gambar_menu' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        $data['status'] = $data['stok'] > 0;

        // Simpan gambar menu jika ada
        if ($request->hasFile('gambar_menu')) {
            $image = $request->file('gambar_menu');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('ast/img/gallery/cafe'), $imageName);
            $data['gambar_menu'] = $imageName;
        }

        Menu::create($data);

        return redirect()->route('Menu')
            ->with('success', 'Menu baru berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);

        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'deskripsi' => 'nullable|string',
            'gambar_menu' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        $data['status'] = $data['stok'] > 0;

        // Ganti gambar jika ada gambar baru
        if ($request->hasFile('gambar_menu')) {
            $image = $request->file('gambar_menu');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('ast/img/gallery/cafe'), $imageName);
            $data['gambar_menu'] = $imageName;
        }

        $menu->update($data);

        return redirect()->route('Menu')
            ->with('success', 'Data menu berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();

        return redirect()->route('Menu')
            ->with('success', 'Menu berhasil dihapus.');
    }
}