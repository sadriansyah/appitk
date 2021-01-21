<?php

namespace App\Imports;

use App\DataPortofolio;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class DataPortofolioImport implements ToModel, WithHeadingRow
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
        return new DataPortofolio([
            'id_portofolio' => $row['id_portofolio'],
            'nomor_pendaftaran' => $row['nomor_pendaftaran'],
            'kode_jenis_portofolio' => $row['kode_jenis_portofolio'],
            'file_portofolio' => $row['file_portofolio'],
            'kode_tahun_akademik' => $this->kode_tahun_akademik,
        ]);
    }
}
