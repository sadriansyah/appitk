<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TahunAkademik;
use App\SebaranProvinsi;
use App\Imports\SebaranProvinsiImport;
use Maatwebsite\Excel\Facades\ExceL;
class SebaranProvinsiController extends Controller
{
  public function index(Request $request)
  {
    $p = $request->get('tahun_akademik');
    $data['tahun_akademik'] = TahunAkademik::pluck('tahun_akademik', 'kode_tahun_akademik');
    $data['tahun_akademik_pilihan'] = $p;

    $data['sebaran'] = SebaranProvinsi::all();
    $data['sebaran'] = \DB::table('sebaran_provinsi')
                      ->join('tahun_akademik', 'sebaran_provinsi.kode_tahun_akademik', '=', 'tahun_akademik.kode_tahun_akademik')
                      ->where('sebaran_provinsi.kode_tahun_akademik', $p)
                      ->get();
    return view('sbmptn.sebaran_provinsi', $data);
  }
  public function import(Request $request)
  {
    $d = $request->get('kode_tahun_akademik');
    $request->validate([
        'file' => 'required'
    ]);
    ExceL::import(new SebaranProvinsiImport($d), request()->file('file'));
    return redirect()->back()->with('sukses', 'Import Data Sebaran Provinsi PTN Berhasil!');
  }
}
