<?php

namespace App\Imports;

use App\DataPilihan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class DataPilihanImport implements ToModel, WithHeadingRow
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
        return new DataPilihan([
            'nomor_pendaftaran' => $row['nomor_pendaftaran'],
            'kode_program_studi' => $row['kode_program_studi'],
            'urutan_ptn' => $row['urutan_ptn'],
            'urutan_program_studi' => $row['urutan_program_studi'],
            'program_studi' => $row['program_studi'],
            'kode_tahun_akademik' => $this->kode_tahun_akademik,
        ]);
    }
}
