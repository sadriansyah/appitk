<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiSoshum extends Model
{
  protected $table = 'terima_soshum';
  protected $fillable = [
    'nama_ptn'.'jumlah','rataan',	's_baku',	'cov', 'min',	'max','kode_tahun_akademik',
  ];
}
