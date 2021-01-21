<?php

namespace App\Imports;

use App\KetunaanPendaftar;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class KetunaanPendaftarImport implements ToModel, WithHeadingRow
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
        return new KetunaanPendaftar([
          'nomor_pendaftaran' => $row['nomor_pendaftaran'],
          'kode' => $row['kode'],
          'kode_tahun_akademik' => $this->kode_tahun_akademik,
        ]);
    }
}
