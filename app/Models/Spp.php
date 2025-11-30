<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    protected $table = 'spp';
    protected $primaryKey = 'id_spp';
    protected $fillable = ['tahun', 'nominal'];
}

// for the first you should to make a seeder 
// caranya
// 1. php artisan make:seeder SppSeeder
// 2. buka database/seeders/SppSeeder.php
// 3. tambahkan kode berikut: 
// <?php
// namespace Database\Seeders;
// use Illuminate\Database\Seeder;
// use App\Models\Spp;
// class SppSeeder extends Seeder
// {
//     public function run()
//     {
//         Spp::create([
//             'tahun_ajaran' => '2023/2024',
//             'nominal' => 1500000,
//         ]);
//         Spp::create([
//             'tahun_ajaran' => '2024/2025',
//             'nominal' => 1800000,
//         ]);
//     }
// }
// 4. simpan filenya
// 5. buka database/seeders/DatabaseSeeder.php
// 6. tambahkan kode berikut pada method run():
// $this->call(SppSeeder::class);
// 7. simpan filenya
// 8. jalankan perintah berikut di terminal: php artisan db:seed
// 9. selesai

// sekarang data spp sudah masuk ke database
// praktekin tuh
// toiletnya di pom bensin wa?
// apalagi ky... ini masih belum masuk data nya karena gagal cek lg bntr
//  kurang data kolom update_at sama created_at
// lupa caranya gw, pake ai aja
// kemarin bikin ny "tahun" bukan "tahun_ajaran"
// skrg cek table db ny di phpmyadmin wa
// dah masuk datanya, tapi karna tadi create users juga jadi ada data masuk di table user
// sekarang ke admin nya tinggal sesuaikan nama kolom tablenya aja
// dah sama ky...
// bikin lagi seedernya, caranya sama kaya tadi cuman sesuaian nama kolommny aja nanti di file seedernya
//bikin anu kah
// iya buat admin trus siswa, kelas, pembayaran.
//pake seeder ya
//bener ga? 100% bener. lanjut, apa
