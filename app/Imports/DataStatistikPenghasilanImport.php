<?php

namespace App\Imports;

use App\DataStatistikPenghasilan;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;

class DataStatistikPenghasilanImport implements ToCollection, WithStartRow
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
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            DataStatistikPenghasilan::create([
                'kode_tahun_akademik' => $this->kode_tahun_akademik,
                'rentang_penghasilan' => $row[0],
                'jumlah_pendaftar' => $row[1],

            ]);
        }
    }
    //public function model(array $row)
    //{
      //  return new DataStatistikPenghasilan([
        //    'rentang_penghasilan' => $row['rentang_penghasilan'],
          //  'jumlah_pendaftar' => $row['jumlah_pendaftar'],
            //'kode_tahun_akademik' => 'Aktif',
        //]);
    //}
}
