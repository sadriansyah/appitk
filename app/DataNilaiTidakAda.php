<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataNilaiTidakAda extends Model
{
  protected $table = 'data_nilai_tidak_ada';
  protected $fillable = [
      'nomor_pendaftaran', 'kode_mata_pelajaran', 'tahun_ajaran','semester', 'tingkat','keterangan','kode_tahun_akademik',
  ];
}
