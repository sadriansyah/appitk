<?php

namespace App\Imports;

use App\DataSiswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class DataSiswaImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function __construct($d)
    {
        $this->kode_tahun_akademik= $d;
        //dd($this->kode_tahun_akademik);
    }
    public function model(array $row)
    {
        return new DataSiswa([
            'nomor_pendaftaran' => $row['nomor_pendaftaran'],
            'nama_siswa' => $row['nama_siswa'],
            'file_foto' => $row['file_foto'],
            'id_jurusan' => $row['id_jurusan'],
            'npsn_sekolah' => $row['npsn_sekolah'],
            'kode_jenis_kelamin' => $row['kode_jenis_kelamin'],
            'tanggal_lahir' => $row['tanggal_lahir'],
            'kode_jenis_kelas' => $row['kode_jenis_kelas'],
            'nisn' => $row['nisn'],
            'nik' => $row['nik'],
            'ranking_versi_sekolah' => $row['ranking_versi_sekolah'],
            'kip_kks' => $row['kip_kks'],
            'jumlah_nilai_dibawah_kkm' => $row['jumlah_nilai_dibawah_kkm'],
            'siswa_pindahan' => $row['siswa_pindahan'],
            'siswa_pertukaran_pelajar' => $row['siswa_pertukaran_pelajar'],
            'siswa_cuti' => $row['siswa_cuti'],
            'penghasilan_ortu' => $row['penghasilan_ortu'],
            'jumlah_tanggungan' => $row['jumlah_tanggungan'],
            'kode_tahun_akademik' => $this->kode_tahun_akademik,
        ]);
    }
}
