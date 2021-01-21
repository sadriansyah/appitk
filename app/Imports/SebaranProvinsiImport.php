<?php

namespace App\Imports;

use App\SebaranProvinsi;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
class SebaranProvinsiImport implements ToModel, WithStartRow
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
    public function startRow(): int
    {
        return 2;
    }
    public function model(array $row)
    {
        return new SebaranProvinsi([
          'kode_prodi' => $row[1],
          'nama_prodi' => $row[2],
          'nama_provinsi' => $row[3],
          'jumlah_peminat1' => $row[4],
          'jumlah_peminat2' => $row[5],
          'jumlah_peminat' => $row[6],
          'jumlah_terima' => $row[7],
          'kode_tahun_akademik' => $this->kode_tahun_akademik,
        ]);
    }
}
