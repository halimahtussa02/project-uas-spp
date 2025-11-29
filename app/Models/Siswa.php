<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'nisn';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $fillable = ['nisn', 'nis', 'nama', 'id_kelas', 'alamat', 'no_telp', 'id_spp'];
}
