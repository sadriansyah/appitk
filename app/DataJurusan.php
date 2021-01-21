<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataJurusan extends Model
{
    protected $table = 'data_jurusan';
    protected $fillable = [
        'id_jurusan', 'npsn_sekolah', 'masa_studi_dalam_tahun','kode_jurusan', 'akreditasi', 'nilai_akreditasi', 'file_akreditasi', 'tanggal_kadaluarsa', 'tanggal_mulai_akreditasi', 'aktif','kode_tahun_akademik',
    ];

}
