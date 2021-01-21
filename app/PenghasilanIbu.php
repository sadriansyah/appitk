<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenghasilanIbu extends Model
{
  protected $table = 'penghasilan_ibu';
  protected $fillable = [
      'rentang_penghasilan', 'jumlah_pendaftar', 'kode_tahun_akademik',
  ];
}
