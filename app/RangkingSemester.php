<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RangkingSemester extends Model
{
    protected $table = 'ranking_semester';
    protected $fillable = [
        'nomor_pendaftaran', 'semester', 'jenis_kelas','jumlah_siswa', 'indeks_mapel_un', 'ranking_mapel_un','kode_tahun_akademik',
    ];
}
