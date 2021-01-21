<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeketatanSaintek extends Model
{
  protected $table = 'keketatan_saintek';
  protected $fillable = [
      'kode', 'ptn', 'pil1', 'pil2', 'pil3', 'jumlah', 'terima', 'keketatan', 'kode_tahun_akademik,'
  ];
}
