<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataStatistikTambahan extends Model
{
    protected $table = 'data_status_tambahan';
    protected $fillable = [
        'id_status_tambahan', 'nomor_pendaftaran', 'kode_status_tambahan','tahun_ajaran', 'tingkat', 'semester', 'kode_jurusan', 'nama_kelas', 'npsn_sekolah', 'nama_sekolah', 'nisn_siswa','kode_tahun_akademik',
    ];
}
