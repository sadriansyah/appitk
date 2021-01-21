<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JurusanITK extends Model
{
  protected $table = 'jurusan';
  protected $fillable = [
      'kode_jurusan', 'nama_jurusan',
  ];
}
