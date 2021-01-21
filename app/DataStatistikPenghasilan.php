<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataStatistikPenghasilan extends Model
{
    protected $table = 'data_statistik_penghasilan';
    protected $fillable = [
        'rentang_penghasilan', 'jumlah_pendaftar','kode_tahun_akademik'
    ];
}
