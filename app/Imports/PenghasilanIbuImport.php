<?php

namespace App\Imports;

use App\PenghasilanIbu;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class PenghasilanIbuImport implements ToModel, WithHeadingRow
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
        return new PenghasilanIbu([
            'rentang_penghasilan' => $row['rentang_penghasilan'],
            'jumlah_pendaftar' => $row['jumlah_pendaftar'],
            'kode_tahun_akademik' => $this->kode_tahun_akademik,
        ]);
    }
}
