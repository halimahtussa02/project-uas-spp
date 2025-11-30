<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pembayaran;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Pembayaran::create([
                'id_admin' => 1,
                'nisn' => '1234567890',
                'tgl_bayar' => now(),
                'bulan_dibayar' => 'Januari',
                'tahun_dibayar' => '2023',
                'id_spp' => 1,
                'jumlah_bayar' => 1500000,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    }
}
