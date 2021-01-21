<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPerubahanNPSN extends Model
{
  protected $table = 'data_perubahan_npsn';
  protected $fillable = [
      'npsn_lama', 'npsn_baru', 'nama','kode_tahun_akademik',
  ];
}
