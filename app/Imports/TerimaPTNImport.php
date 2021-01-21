<?php

namespace App\Imports;

use App\TerimaPTN;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class TerimaPTNImport implements ToModel, WithHeadingRow
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
            return new TerimaPTN([
                'kode_prodi' => $row['KODE PRODI'],
                'nama_prodi' => $row['NAMA'.' '.'PRODI'],
                'kode_peserta' => $row['KODE'.' '.'PESERTA'],
                'nama_peserta' => $row['NAMA'.' '.'PESERTA'],
                'bidikmisi' => $row['BIDIKMISI'],
                'kode_tahun_akademik' => $this->kode_tahun_akademik,
            ]);
    }
}
