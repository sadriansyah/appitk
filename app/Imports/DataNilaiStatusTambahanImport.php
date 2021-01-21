<?php

namespace App\Imports;

use App\DataNilaiStatusTambahan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class DataNilaiStatusTambahanImport implements ToModel, WithHeadingRow
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
        return new DataNilaiStatusTambahan([
            'id_status_tambahan' => $row['id_status_tambahan'],
            'nomor_pendaftaran' => $row['nomor_pendaftaran'],
            'kode_mata_pelajaran' => $row['kode_mata_pelajaran'],
            'nilai_skala_4' => $row['nilai_skala_4'],
            'nilai_skala_100' => $row['nilai_skala_100'],
            'tahun_kur' => $row['tahun_kur'],
            'basis' => $row['basis'],
            'unit' => $row['unit'],
            'kkm' => $row['kkm'],
            'jam_equivalen' => $row['jam_equivalen'],
            'kode_tahun_akademik' => $this->kode_tahun_akademik,
        ]);
    }
}
