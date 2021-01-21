<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DayaTampung extends Model
{
  protected $table = 'daya_tampung';
  protected $fillable = [
    'kode_prodi', 'kapasitas',
  ];
}
