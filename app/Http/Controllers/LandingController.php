<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Meja;
use App\Models\Reservasi;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $menus = Menu::where('status', true)->latest()->get();
        $mejas = Meja::where('status', 'Kosong')->get();

        return view('landing', compact('menus', 'mejas'));
    }

    public function reservasiStore(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'telepon' => 'required|string|max:255',
            'tanggal' => 'required|string|max:255',
            'jam' => 'required|string|max:255',
            'orang' => 'required|numeric|min:1',
            'meja' => 'nullable|string|max:255',
            'catatan' => 'nullable|string',
        ]);

        $data['status'] = 'Menunggu';

        Reservasi::create($data);

        return redirect()->to(url()->previous() . '#reservation')
            ->with('success', 'Terima kasih! Reservasi meja Anda berhasil diajukan. Tim Cafe Farika akan segera mengonfirmasi jadwal Anda.');
    }
}
