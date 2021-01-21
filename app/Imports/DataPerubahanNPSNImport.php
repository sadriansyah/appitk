<?php

namespace App\Imports;

use App\DataPerubahanNPSN;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class DataPerubahanNPSNImport implements ToModel, WithHeadingRow
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
        return new DataPerubahanNPSN([
          'npsn_lama' => $row['npsn_lama'],
          'npsn_baru' => $row['npsn_baru'],
          'nama' => $row['nama'],
          'kode_tahun_akademik' => $this->kode_tahun_akademik,
        ]);
    }
}
