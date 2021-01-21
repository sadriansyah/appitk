<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KetunaanPendaftar extends Model
{
  protected $table = 'ketunaan_pendaftar';
  protected $fillable = [
      'nomor_pendaftaran','kode','kode_tahun_akademik',
  ];
}
