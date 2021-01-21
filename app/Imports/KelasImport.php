<?php

namespace App\Imports;

use App\Kelas;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class KelasImport implements ToModel, WithHeadingRow
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
        return new Kelas([
            'id_kelas' => $row['id_kelas'],
            'tahun_kelas_diselenggarakan' => $row['tahun_kelas_diselenggarakan'],
            'tingkat' => $row['tingkat'],
            'nama_kelas' => $row['nama_kelas'],
            'kode_jenis_kelas' => $row['kode_jenis_kelas'],
            'id_jurusan' => $row['id_jurusan'],
            'kode_tahun_akademik' => $this->kode_tahun_akademik,
        ]);
    }
}
