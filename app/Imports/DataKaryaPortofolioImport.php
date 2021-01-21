<?php

namespace App\Imports;

use App\DataKaryaPortofolio;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class DataKaryaPortofolioImport implements ToModel, WithHeadingRow
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
        return new DataKaryaPortofolio([
            'id_karya_portofolio' => $row['id_karya_portofolio'],
            'nomor_pendaftaran' => $row['nomor_pendaftaran'],
            'id_portofolio' => $row['id_portofolio'],
            'judul_karya' => $row['judul_karya'],
            'file_karya' => $row['file_karya'],
            'kode_tahun_akademik' => $this->kode_tahun_akademik,
        ]);
    }
}
