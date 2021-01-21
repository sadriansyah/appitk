<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPilihan extends Model
{
    protected $table = 'data_pilihan';
    protected $fillable = [
        'nomor_pendaftaran', 'kode_program_studi', 'urutan_ptn','urutan_program_studi', 'program_studi','kode_tahun_akademik',
    ];
}
