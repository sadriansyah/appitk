<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TerimaPTN extends Model
{
  protected $table = 'terima_ptn';
  protected $fillable = [
    'kode_prodi', 'nama_prodi', 'kode_peserta','nama_peserta','bidikmisi','kode_tahun_akademik',
  ];
}
