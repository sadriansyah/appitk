<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriFileSBMPTN extends Model
{
  protected $table = 'kategori';
  protected $fillable = [
      'kode_kategori', 'kategori',
  ];
}
