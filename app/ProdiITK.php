<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdiITK extends Model
{
  protected $table = 'prodi';
  protected $fillable = [
      'kode_prodi', 'nama_prodi', 'kode_jurusan',
  ];
}
