<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahunSBMPTN extends Model
{
  protected $table = 'tahun_sbmptn';
  protected $fillable = ['kode_tahun_akademik', 'tahun_akademik',];
}
