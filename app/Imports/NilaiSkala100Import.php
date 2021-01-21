<?php

namespace App\Imports;

use App\NilaiSkala100SMK;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
class NilaiSkala100Import implements ToModel, WithStartRow
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
        return new NilaiSkala100SMK([
            'nomor_pendaftaran' => $row[0],
            'kode_jurusan' => $row[1],
            'nama_jurusan' => $row[2],
            "IND1" => $row[3],
            "INDUnit1" => $row[4],
            "INDBasis1" => $row[5],
            "MAT1" => $row[6],
            "MATUnit1" => $row[7],
            "MATBasis1" => $row[8],
            "ING1" => $row[9],
            "INGUnit1" => $row[10],
            "INGBasis1" => $row[11],
            "IND2" => $row[12],
            "INDUnit2" => $row[13],
            "INDBasis2" => $row[14],
            "MAT2" => $row[15],
            "MATUnit2" => $row[16],
            "MATBasis2" => $row[17],
            "ING2" => $row[18],
            "INGUnit2" => $row[19],
            "INGBasis2" => $row[20],
            "IND3" => $row[21],
            "INDUnit3" => $row[22],
            "INDBasis3" => $row[23],
            "MAT3" => $row[24],
            "MATUnit3" => $row[25],
            "MATBasis3" => $row[26],
            "ING3" => $row[27],
            "INGUnit3" => $row[28],
            "INGBasis3" => $row[29],
            "IND4" => $row[30],
            "INDUnit4" => $row[31],
            "INDBasis4" => $row[32],
            "MAT4" => $row[33],
            "MATUnit4" => $row[34],
            "MATBasis4" => $row[35],
            "ING4" => $row[36],
            "INGUnit4" => $row[37],
            "INGBasis4" => $row[38],
            "IND5" => $row[39],
            "INDUnit5" => $row[40],
            "INDBasis5" => $row[41],
            "MAT5" => $row[42],
            "MATUnit5" => $row[43],
            "MATBasis5" => $row[44],
            "ING5" => $row[45],
            "INGUnit5" => $row[46],
            "INGBasis5" => $row[47],
            "IND6" => $row[48],
            "INDUnit6" => $row[49],
            "INDBasis6" => $row[50],
            "MAT6" => $row[51],
            "MATUnit6" => $row[52],
            "MATBasis6" => $row[53],
            "ING6" => $row[54],
            "INGUnit6" => $row[55],
            "INGBasis6" => $row[56],
            'kode_tahun_akademik' => $this->kode_tahun_akademik,
        ]);
    }
}
