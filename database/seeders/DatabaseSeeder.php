<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Menu;
use App\Models\Meja;
use App\Models\Reservasi;
use App\Models\Stok;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        
           }
}
