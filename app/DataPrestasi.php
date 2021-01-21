<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPrestasi extends Model
{
    protected $table = 'data_prestasi';
    protected $fillable = [
        'id_prestasi', 'nomor_pendaftaran', 'jenis_prestasi','jenjang_prestasi', 'file_sertifikat','juara','kode_tahun_akademik',
    ];
}
