<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileSBMPTN extends Model
{
  protected $table = 'file_sbmptn';
  protected $fillable = ['id', 'nama_file','kode_kategori','kode_tahun_akademik'];
}
