<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiSkala4SMK extends Model
{
    protected $table = 'data_nilai_mapel_un_kolom_smk_skala4';
    protected $fillable = [
        'nomor_pendaftaran', 'kode_jurusan','nama_jurusan','IND1','INDUnit1','INDBasis1','MAT1','MATUnit1',	'MATBasis1','ING1','INGUnit1','INGBasis1','IND2','INDUnit2','INDBasis2','MAT2', 'MATUnit2','MATBasis2','ING2','INGUnit2','INGBasis2','IND3','INDUnit3','INDBasis3', 'MAT3',	'MATUnit3','MATBasis3','ING3','INGUnit3','INGBasis3','IND4','INDUnit4','INDBasis4','MAT4','MATUnit4','MATBasis4','ING4','INGUnit4','INGBasis4','IND5','INDUnit5', 'INDBasis5','MAT5','MATUnit5','MATBasis5','ING5','INGUnit5','INGBasis5', 'IND6', 'INDUnit6','INDBasis6','MAT6','MATUnit6','MATBasis6','ING6','INGUnit6','INGBasis6','kode_tahun_akademik',

    ];
}
