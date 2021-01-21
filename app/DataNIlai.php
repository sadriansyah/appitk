<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataNIlai extends Model
{
    protected $table = 'data_nilai';
    protected $fillable = [
        'nomor_pendaftaran', 'semester', 'id_kelas', 'kode_mata_pelajaran', 'nama_mata_pelajaran_kesetaraan','nilai_skala_4', 'nilai_skala_100', 'tahun_kur', 'basis', 'unit', 'remedial_4', 'remedial_100', 'kkm', 'jam_equivalen', 'tahun_ambil', 'semester_ambil','kode_tahun_akademik',
    ];
}
