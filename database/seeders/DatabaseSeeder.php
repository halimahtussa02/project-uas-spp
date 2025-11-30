<?php

namespace Database\Seeders;

use App\Models\User;
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
        $this->call(SppSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(SiswaSeeder::class);
        $this->call(PembayaranSeeder::class);
    }
}
