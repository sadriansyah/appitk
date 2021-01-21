<?php

namespace App\Imports;

use App\DataPrestasi;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class DataPrestasiImport implements ToModel, WithHeadingRow
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
        return new DataPrestasi([
            'id_prestasi' => $row['id_prestasi'],
            'nomor_pendaftaran' => $row['nomor_pendaftaran'],
            'jenis_prestasi' => $row['jenis_prestasi'],
            'jenjang_prestasi' => $row['jenjang_prestasi'],
            'file_sertifikat' => $row['file_sertifikat'],
            'kode_tahun_akademik' => $this->kode_tahun_akademik,
        ]);
    }
}
