<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('siswa', function (Blueprint $table) {
        $table->char('nisn', 10)->primary(); // PK, NISN biasanya 10 digit
        $table->char('nis', 8);
        $table->string('nama', 35);
        $table->unsignedBigInteger('id_kelas'); // FK ke kelas
        $table->text('alamat');
        $table->string('no_telp', 13);
        $table->unsignedBigInteger('id_spp'); // FK ke spp
        $table->timestamps();

        // Foreign Keys
        $table->foreign('id_kelas')->references('id_kelas')->on('kelas')->onDelete('cascade');
        $table->foreign('id_spp')->references('id_spp')->on('spp')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
