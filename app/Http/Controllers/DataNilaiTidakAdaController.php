<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataNilaiTidakAda;
use App\TahunAkademik;
use App\Imports\DataNilaiTidakAdaImport;
use Maatwebsite\Excel\Facades\ExceL;
class DataNilaiTidakAdaController extends Controller
{
  public function index(Request $request)
  {
    $data['listprodi'] = \DB::select("SELECT*FROM prodi");
    $data['tahun'] = \DB::select("SELECT*FROM tahun_akademik order by kode_tahun_akademik ASC");
    $p = $request->get('tahun_akademik');
    $data['tahun_akademik'] = TahunAkademik::pluck('tahun_akademik', 'kode_tahun_akademik');
    $data['tahun_akademik_pilihan'] = $p;
    $data['nilai'] = \DB::table('data_nilai_tidak_ada')
                      ->join('tahun_akademik', 'data_nilai_tidak_ada.kode_tahun_akademik', '=', 'tahun_akademik.kode_tahun_akademik')
                      ->where('data_nilai_tidak_ada.kode_tahun_akademik', $p)
                      ->get();
    return view('layouts/data_nilai_tidak_ada', $data);
  }
  public function import(Request $request)
  {
    $d = $request->get('kode_tahun_akademik');
    $request->validate([
        'file' => 'required|mimes:csv,txt'
    ]);
    ExceL::import(new DataNilaiTidakAdaImport($d), request()->file('file'));
    return redirect()->back()->with('sukses', 'Import Data Nilai Tidak Ada Berhasil!');
  }
}
