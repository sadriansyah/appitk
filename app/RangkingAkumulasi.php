<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RangkingAkumulasi extends Model
{
    protected $table = 'ranking_akumulasi';
    protected $fillable = [
        'nomor_pendaftaran', 'jumlah_siswa_1_5', 'indeks_mapel_un_1_5','ranking_mapel_un_1_5', 'percentile','kode_tahun_akademik',
    ];
}
