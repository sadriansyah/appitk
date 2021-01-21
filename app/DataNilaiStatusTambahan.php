<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataNilaiStatusTambahan extends Model
{
    protected $table = 'data_nilai_status_tambahan';
    protected $fillable = [
        'id_status_tambahan', 'nomor_pendaftaran', 'kode_mata_pelajaran','nilai_skala_4', 'nilai_skala_100', 'tahun_kur', 'kkm','basis', 'unit','jam_equivalen','kode_tahun_akademik',
    ];
}
