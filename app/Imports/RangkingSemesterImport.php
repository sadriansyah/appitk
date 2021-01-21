<?php

namespace App\Imports;

use App\RangkingSemester;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class RangkingSemesterImport implements ToModel, WithHeadingRow
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
        return new RangkingSemester([
            'nomor_pendaftaran' => $row['nomor_pendaftaran'],
            'semester' => $row['semester'],
            'jenis_kelas' => $row['jenis_kelas'],
            'jumlah_siswa' => $row['jumlah_siswa'],
            'indeks_mapel_un' => $row['indeks_mapel_un'],
            'ranking_mapel_un' => $row['ranking_mapel_un'],
            'kode_tahun_akademik' => $this->kode_tahun_akademik,
        ]);
    }
}
