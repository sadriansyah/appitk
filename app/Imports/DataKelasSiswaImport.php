<?php

namespace App\Imports;

use App\DataKelasSiswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class DataKelasSiswaImport implements ToModel, WithHeadingRow
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
        return new DataKelasSiswa([
            'nomor_pendaftaran' => $row['nomor_pendaftaran'],
            'id_kelas' => $row['id_kelas'],
            'kode_tahun_akademik' => $this->kode_tahun_akademik,
        ]);
    }
}
