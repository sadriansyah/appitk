<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPortofolio extends Model
{
    protected $table = 'data_portofolio';
    protected $fillable = [
        'id_portofolio', 'nomor_pendaftaran', 'kode_jenis_portofolio', 'file_portofolio','kode_tahun_akademik',
    ];
}
