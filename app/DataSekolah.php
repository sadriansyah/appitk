<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataSekolah extends Model
{
    protected $table = 'data_sekolah';
    protected $fillable = [
        'npsn', 'id_sekolah_pdsp', 'nama_sekolah','jenis_sekolah', 'kode_kabupaten', 'nama_kabupaten', 'kode_provinsi', 'nama_provinsi', 'akreditasi_sekolah', 'nilai_akreditasi','file_akreditasi', 'tanggal_kadaluarsa', 'kepemilikan', 'tanggal_mulai_akreditasi','spk','kode_tahun_akademik',
    ];
}
