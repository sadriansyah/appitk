<?php

namespace App\Imports;

use App\DataNIlai;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class DataNilaiImport implements ToModel, WithHeadingRow
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
        return new DataNIlai([
            'nomor_pendaftaran' => $row['nomor_pendaftaran'],
            'semester' => $row['semester'],
            'id_kelas' => $row['id_kelas'],
            'kode_mata_pelajaran' => $row['kode_mata_pelajaran'],
            'nama_mata_pelajaran_kesetaraan' => $row['nama_mata_pelajaran_kesetaraan'],
            'nilai_skala_4' => $row['nilai_skala_4'],
            'nilai_skala_100' => $row['nilai_skala_100'],
            'tahun_kur' => $row['tahun_kur'],
            'basis' => $row['basis'],
            'unit' => $row['unit'],
            'remedial_4' => $row['remedial_4'],
            'remedial_100' => $row['remedial_100'],
            'kkm' => $row['kkm'],
            'jam_equivalen' => $row['jam_equivalen'],
            'tahun_ambil' => $row['tahun_ambil'],
            'semester_ambil' => $row['semester_ambil'],
            'kode_tahun_akademik' => $this->kode_tahun_akademik,
        ]);
    }
}
