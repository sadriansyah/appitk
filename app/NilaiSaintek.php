<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiSaintek extends Model
{
    protected $table = 'terima_saintek';
    protected $fillable = [
    	'nama_ptn'.'jumlah','rataan',	's_baku',	'cov', 'min',	'max','kode_tahun_akademik',
    ];
}
