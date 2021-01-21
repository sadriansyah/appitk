<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'data_kelas';
    protected $fillable = [
        'id_kelas', 'tahun_kelas_diselenggarakan', 'tingkat','nama_kelas', 'kode_jenis_kelas', 'id_jurusan','kode_tahun_akademik',
    ];
}
