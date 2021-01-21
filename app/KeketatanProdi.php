<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeketatanProdi extends Model
{
    protected $table = 'keketatan_prodi';
    protected $fillable = [
        'kode_prodi',	'nama_prodi','peminat','terima','keketatan','peminat1','persen_peminat1','terima1',	'persen_terima1',	'peminat2',	'persen_peminat2',	'terima2',	'persen_terima2',	'kode_tahun_akademik',
    ];
}
