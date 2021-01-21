<?php

namespace App\Imports;

use App\DataSekolah;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class DataSekolahImport implements ToModel, WithHeadingRow
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
        return new DataSekolah([
            'npsn' => $row['npsn'],
            'id_sekolah_pdsp' => $row['id_sekolah_pdsp'],
            'nama_sekolah' => $row['nama_sekolah'],
            'jenis_sekolah' => $row['jenis_sekolah'],
            'kode_kabupaten' => $row['kode_kabupaten'],
            'nama_kabupaten' => $row['nama_kabupaten'],
            'kode_provinsi' => $row['kode_propinsi'],
            'nama_provinsi' => $row['nama_propinsi'],
            'akreditasi_sekolah' => $row['akreditasi_sekolah'],
            'nilai_akreditasi' => $row['nilai_akreditasi'],
            'file_akreditasi' => $row['file_akreditasi'],
            'tanggal_kadaluarsa' => $row['tanggal_kadaluarsa'],
            'kepemilikan' => $row['kepemilikan'],
            'tanggal_mulai_akreditasi' => $row['tanggal_mulai_akreditasi'],
            'spk' => $row['spk'],
            'kode_tahun_akademik' => $this->kode_tahun_akademik,
        ]);
    }
}
