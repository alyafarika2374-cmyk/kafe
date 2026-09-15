<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::latest()->get();

        $stats = [
            'total' => $roles->count(),
            'aktif' => $roles->where('status_akun', true)->count(),
            'nonaktif' => $roles->where('status_akun', false)->count(),
            'staf' => $roles->whereIn('peran', [
                'Kasir',
                'Barista',
                'Pelayan'
            ])->count(),
            'admin' => $roles->where('peran', 'Administrator')->count(),
        ];

        return view('peran_pengguna', compact('roles', 'stats'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email|unique:peran_penggunas,email',
            'telepon' => 'nullable|string|max:20',
            'peran' => 'required|string|max:50',
            'password' => 'required|min:6',
        ]);

        Role::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'peran' => $request->peran,
            'password' => Hash::make($request->password),
            'status_akun' => $request->has('status_akun'),
        ]);

        return redirect()
            ->route('peran_pengguna')
            ->with('success', 'Pengguna berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email|unique:peran_penggunas,email,' . $id,
            'telepon' => 'nullable|string|max:20',
            'peran' => 'required|string|max:50',
            'password' => 'nullable|min:6',
        ]);

        $role->nama = $request->nama;
        $role->email = $request->email;
        $role->telepon = $request->telepon;
        $role->peran = $request->peran;
        $role->status_akun = $request->has('status_akun');

        if ($request->filled('password')) {
            $role->password = Hash::make($request->password);
        }

        $role->save();

        return redirect()
            ->route('peran_pengguna')
            ->with('success', 'Data pengguna berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $role = Role::findOrFail($id);

        $role->delete();

        return redirect()
            ->route('peran_pengguna')
            ->with('success', 'Pengguna berhasil dihapus!');
    }
}