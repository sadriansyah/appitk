<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiSkala4SMA extends Model
{
    protected $table = 'data_nilai_mapel_un_kolom_sma_skala4';
    protected $fillable = [
        'nomor_pendaftaran', 'kode_jurusan','nama_jurusan',
        'IND1','INDUnit1','INDBasis1','MAT1','MATUnit1',	'MATBasis1','ING1','INGUnit1','INGBasis1','IND2','INDUnit2','INDBasis2','MAT2', 'MATUnit2','MATBasis2','ING2','INGUnit2','INGBasis2','IND3','INDUnit3','INDBasis3', 'MAT3',	'MATUnit3','MATBasis3','ING3','INGUnit3','INGBasis3','IND4','INDUnit4','INDBasis4','MAT4', 'MATUnit4','MATBasis4','ING4','INGUnit4','INGBasis4','IND5','INDUnit5', 'INDBasis5','MAT5','MATUnit5','MATBasis5','ING5','INGUnit5','INGBasis5', 'IND6', 'INDUnit6','INDBasis6','MAT6','MATUnit6','MATBasis6','ING6','INGUnit6','INGBasis6',

        'fis1', 'fisunit1', 'fisbasis1', 'kim1', 'kimunit1', 'kimbasis1', 'bio1', 'biounit1', 'biobasis1', 'geo1', 'geounit1', 'geobasis1', 'eko1', 'ekounit1', 'ekobasis1', 'sos1', 'sosunit1', 'sosbasis1', 'sid1', 'sidunit1', 'sidbasis1', 'bas1', 'basunit1', 'basbasis1', 'sba1', 'sbaunit1', 'sbabasis1',

        'fis2', 'fisunit2', 'fisbasis2', 'kim2', 'kimunit2', 'kimbasis2', 'bio2', 'biounit2', 'biobasis2', 'geo2', 'geounit2', 'geobasis2', 'eko2', 'ekounit2', 'ekobasis2', 'sos2', 'sosunit2', 'sosbasis2', 'sid2', 'sidunit2', 'sidbasis2', 'bas2', 'basunit2', 'basbasis2', 'sba2', 'sbaunit2', 'sbabasis2',

        'fis3', 'fisunit3', 'fisbasis3', 'kim3', 'kimunit3', 'kimbasis3', 'bio3', 'biounit3', 'biobasis3', 'geo3', 'geounit3', 'geobasis3', 'eko3', 'ekounit3', 'ekobasis3', 'sos3', 'sosunit3', 'sosbasis3', 'sid3', 'sidunit3', 'sidbasis3', 'bas3', 'basunit3', 'basbasis3', 'sba3', 'sbaunit3', 'sbabasis3',

        'fis4', 'fisunit4', 'fisbasis4', 'kim4', 'kimunit4', 'kimbasis4', 'bio4', 'biounit4', 'biobasis4', 'geo4', 'geounit4', 'geobasis4', 'eko4', 'ekounit4', 'ekobasis4', 'sos4', 'sosunit4', 'sosbasis4', 'sid4', 'sidunit4', 'sidbasis4', 'bas4', 'basunit4', 'basbasis4', 'sba4', 'sbaunit4', 'sbabasis4',

        'fis5', 'fisunit5', 'fisbasis5', 'kim5', 'kimunit5', 'kimbasis5', 'bio5', 'biounit5', 'biobasis5', 'geo5', 'geounit5', 'geobasis5', 'eko5', 'ekounit5', 'ekobasis5', 'sos5', 'sosunit5', 'sosbasis5', 'sid5', 'sidunit5', 'sidbasis5', 'bas5', 'basunit5', 'basbasis5', 'sba5', 'sbaunit5', 'sbabasis5',

        'fis6', 'fisunit6', 'fisbasis6', 'kim6', 'kimunit6', 'kimbasis6', 'bio6', 'biounit6', 'biobasis6', 'geo6', 'geounit6', 'geobasis6', 'eko6', 'ekounit6', 'ekobasis6', 'sos6', 'sosunit6', 'sosbasis6', 'sid6', 'sidunit6', 'sidbasis6', 'bas6', 'basunit6', 'basbasis6', 'sba6', 'sbaunit6', 'sbabasis6','kode_tahun_akademik',
    ];
}
