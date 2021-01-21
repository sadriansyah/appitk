<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BobotNilai extends Model
{
  protected $table = 'kriteria_nilai';
  protected $fillable = [
    'kriteria', 'bobot','tahun_akademik'
    ];
}
