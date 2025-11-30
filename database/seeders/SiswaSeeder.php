<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Siswa;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Siswa::create([
            'nisn' => '1234567890',
            'nis' => '12345678',
            'nama' => 'Ahmad Siswa',
            'id_kelas' => 1,
            'alamat' => 'Jl. Merdeka No.1',
            'no_telp' => '081234567890',
            'id_spp' => 1,
        ]);
    }
}
