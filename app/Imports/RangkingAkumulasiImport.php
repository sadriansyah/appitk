<?php

namespace App\Imports;

use App\RangkingAkumulasi;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class RangkingAkumulasiImport implements ToModel, WithHeadingRow
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
        return new RangkingAkumulasi([
            'nomor_pendaftaran' => $row['nomor_pendaftaran'],
            'jumlah_siswa_1_5' => $row['jumlah_siswa_1_5'],
            'indeks_mapel_un_1_5' => $row['indeks_mapel_un_1_5'],
            'ranking_mapel_un_1_5' => $row['ranking_mapel_un_1_5'],
            'percentile' => $row['percentile'],
            'kode_tahun_akademik' => $this->kode_tahun_akademik,
        ]);
    }
}
