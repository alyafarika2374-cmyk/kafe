<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Menu;
use App\Models\Meja;
use App\Models\Reservasi;
use App\Models\Stok;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_menu' => Menu::count(),
            'menu_tersedia' => Menu::where('stok', '>', 0)->count(),
            'total_meja' => Meja::count(),
            'meja_kosong' => Meja::where('status', 'Kosong')->count(),
            'meja_terisi' => Meja::where('status', 'Terisi')->count(),
            'meja_reservasi' => Meja::where('status', 'Reservasi')->count(),
            'total_reservasi' => Reservasi::count(),
            'reservasi_hari_ini' => Reservasi::whereDate('tanggal', date('Y-m-d'))->count(),
            'reservasi_menunggu' => Reservasi::where('status', 'Menunggu')->count(),
            'total_stok_bahan' => Stok::count(),
            'stok_hampir_habis' => Stok::whereIn('status', ['Hampir Habis', 'Habis'])->count(),
            'total_pengguna' => Role::count(),
            'total_pengguna' => User::count(),
            'pengguna_aktif' => User::where('status_akun', true)->count(),
        ];

        $recentReservasis = Reservasi::latest()->take(5)->get();
        $lowStocks = Stok::whereIn('status', ['Hampir Habis', 'Habis'])->take(5)->get();
        $recentMenus = Menu::latest()->take(6)->get();

        return view('index', compact('stats', 'recentReservasis', 'lowStocks', 'recentMenus'));
    }
}
