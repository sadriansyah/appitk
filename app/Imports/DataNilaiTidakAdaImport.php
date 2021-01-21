<?php

namespace App\Imports;

use App\DataNilaiTidakAda;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class DataNilaiTidakAdaImport implements ToModel, WithHeadingRow
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
        return new DataNilaiTidakAda([
          'nomor_pendaftaran' => $row['nomor_pendaftaran'],
          'kode_mata_pelajaran' => $row['kode_mata_pelajaran'],
          'tahun_ajaran' => $row['tahun_ajaran'],
          'semester' => $row['semester'],
          'tingkat' => $row['tingkat'],
          'keterangan' => $row['keterangan'],
          'kode_tahun_akademik' => $this->kode_tahun_akademik,
        ]);
    }
}
