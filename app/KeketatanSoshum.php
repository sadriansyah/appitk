<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeketatanSoshum extends Model
{
  protected $table = 'keketatan_soshum';
  protected $fillable = [
      'kode', 'ptn', 'pil1', 'pil2', 'pil3', 'jumlah', 'terima', 'keketatan', 'kode_tahun_akademik,'
  ];
}
