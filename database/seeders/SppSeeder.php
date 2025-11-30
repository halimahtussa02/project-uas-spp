<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Spp;

class SppSeeder extends Seeder
{
    public function run()
    {
        Spp::create([
            'tahun' => 2023,
            'nominal' => 1500000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Spp::create([
            'tahun' => 2024,
            'nominal' => 1800000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
