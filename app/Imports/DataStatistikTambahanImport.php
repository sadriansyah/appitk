<?php

namespace App\Imports;

use App\DataStatistikTambahan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class DataStatistikTambahanImport implements ToModel, WithHeadingRow
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
        return new DataStatistikTambahan([
            'id_status_tambahan' => $row['id_status_tambahan'],
            'nomor_pendaftaran' => $row['nomor_pendaftaran'],
            'kode_status_tambahan' => $row['kode_status_tambahan'],
            'tahun_ajaran' => $row['tahun_ajaran'],
            'tingkat' => $row['tingkat'],
            'semester' => $row['semester'],
            'kode_jurusan' => $row['kode_jurusan'],
            'nama_kelas' => $row['nama_kelas'],
            'npsn_sekolah' => $row['npsn_sekolah'],
            'nama_sekolah' => $row['nama_sekolah'],
            'nisn_siswa' => $row['nisn_siswa'],
            'kode_tahun_akademik' => $this->kode_tahun_akademik,
        ]);
    }
}
