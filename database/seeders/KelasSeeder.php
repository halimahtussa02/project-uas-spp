<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelas::insert([
            [
                'nama_kelas' => 'X',
                'kompetensi_keahlian' => 'Ipa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'nama_kelas' => 'X',
                'kompetensi_keahlian' => 'Ips',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kelas' => 'X',
                'kompetensi_keahlian' => 'Bahasa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
              [
                'nama_kelas' => 'XI',
                'kompetensi_keahlian' => 'Ipa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kelas' => 'XI',
                'kompetensi_keahlian' => 'Ips',
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'nama_kelas' => 'XI',
                'kompetensi_keahlian' => 'Bahasa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'nama_kelas' => 'XII',
                'kompetensi_keahlian' => 'Ipa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kelas' => 'XII',
                'kompetensi_keahlian' => 'Ips',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kelas' => 'XII',
                'kompetensi_keahlian' => 'Bahasa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
    
        ]);
    }
}
