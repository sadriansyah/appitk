<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SebaranProvinsi extends Model
{
  protected $table = 'sebaran_provinsi';
  protected $fillable = [
      'id','kode_prodi', 'nama_prodi', 'nama_provinsi', 'jumlah_peminat1', 'jumlah_peminat2', 'jumlah_peminat', 'jumlah_terima', 'kode_tahun_akademik',
  ];
}
