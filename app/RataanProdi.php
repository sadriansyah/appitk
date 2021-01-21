<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RataanProdi extends Model
{
  protected $table = 'rataan_prodi';
  protected $fillable = [
    'no', 'kode_prodi', 'nama_prodi', 'rataan', 's_baku', 'cov', 'min', 'max','kode_tahun_akademik',
  ];
}
