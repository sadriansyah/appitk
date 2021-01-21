<?php

namespace App\Imports;

use App\DataJurusan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class DataJurusanImport implements ToModel, WithHeadingRow
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
        return new DataJurusan([
            'id_jurusan' => $row['id_jurusan'],
            'npsn_sekolah' => $row['npsn_sekolah'],
            'masa_studi_dalam_tahun' => $row['masa_studi_dalam_tahun'],
            'kode_jurusan' => $row['kode_jurusan'],
            'akreditasi' => $row['akreditasi'],
            'nilai_akreditasi' => $row['nilai_akreditasi'],
            'file_akreditasi' => $row['file_akreditasi'],
            'tanggal_kadaluarsa' => $row['tanggal_kadaluarsa'],
            'tanggal_mulai_akreditasi' => $row['tanggal_mulai_akreditasi'],
            'aktif' => $row['aktif'],
            'kode_tahun_akademik' => $this->kode_tahun_akademik,
        ]);
    }
}
