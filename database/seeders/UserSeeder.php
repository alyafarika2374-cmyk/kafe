<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $adminRole = Role::where('nama_peran', 'Admin')->first();

        User::create([
            'name' => 'Admin',
            'email' => 'farika@gmail.com',
            'password' => Hash::make('farika04072009'),
            'role_id' => $adminRole->id,
            'status_akun' => true,
        ]);
    }
}