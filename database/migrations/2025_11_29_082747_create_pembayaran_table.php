<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * table pembayaran udah ada jadi bentrok ini, gw apus dl yg di phpmyadmin
     */
   public function up()
{
    Schema::create('pembayaran', function (Blueprint $table) {
        $table->id('id_pembayaran'); // Diagram: id_pembayarn
        $table->unsignedBigInteger('id_admin'); // FK ke petugas
        $table->char('nisn', 10); // FK ke siswa
        $table->date('tgl_bayar'); // Tanggal transaksi
        $table->string('bulan_dibayar', 8);
        $table->string('tahun_dibayar', 4);
        $table->unsignedBigInteger('id_spp'); // FK ke spp
        $table->integer('jumlah_bayar');
        $table->timestamps();

        // Foreign Keys
        $table->foreign('id_admin')->references('id_admin')->on('admin')->onDelete('cascade');
        $table->foreign('nisn')->references('nisn')->on('siswa')->onDelete('cascade');
        $table->foreign('id_spp')->references('id_spp')->on('spp')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
