<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataSiswa extends Model
{
    protected $table = 'data_siswa';
    protected $fillable = [
        'nomor_pendaftaran', 'nama_siswa', 'file_foto','id_jurusan', 'npsn_sekolah', 'kode_jenis_kelamin', 'tanggal_lahir','nisn', 'nik', 'jumlah_nilai_dibawah_kkm','kode_jenis_kelas','siswa_pindahan', 'siswa_pertukaran_pelajar', 'siswa_cuti', 'ranking_versi_sekolah','kip_kks','penghasilan_ortu', 'jumlah_tanggungan','kode_tahun_akademik',
    ];
}
