<?php

namespace App\Imports;

use App\RataanProdi;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
class RataanProdiImport implements ToModel,WithStartRow
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
        return new RataanProdi([
          'no' => $row[0],
          'kode_prodi' => $row[1],
          'nama_prodi' => $row[2],
          'rataan' => $row[3],
          's_baku' => $row[4],
          'cov' => $row[5],
          'min' => $row[6],
          'max' => $row[7],
          'kode_tahun_akademik' => $this->kode_tahun_akademik,

        ]);
    }
}
