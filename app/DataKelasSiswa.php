<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataKelasSiswa extends Model
{
    protected $table = 'data_kelas_siswa';
    protected $fillable = [
        'nomor_pendaftaran', 'id_kelas','kode_tahun_akademik',
    ];
}
