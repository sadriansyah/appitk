<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataKaryaPortofolio extends Model
{
    protected $table = 'data_karya_portofolio';
    protected $fillable = [
        'id_karya_portofolio', 'nomor_pendaftaran', 'id_portofolio', 'judul_karya', 'file_karya','kode_tahun_akademik',
    ];
}
