<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataPerubahanNPSN;
use App\TahunAkademik;
use App\Imports\DataPerubahanNPSNImport;
use Maatwebsite\Excel\Facades\ExceL;
class DataPerubahanNPSNController extends Controller
{
  public function index(Request $request)
  {
    $data['listprodi'] = \DB::select("SELECT*FROM prodi");
    $data['tahun'] = \DB::select("SELECT*FROM tahun_akademik order by kode_tahun_akademik ASC");
    $p = $request->get('tahun_akademik');
    $data['tahun_akademik'] = TahunAkademik::pluck('tahun_akademik', 'kode_tahun_akademik');
    $data['tahun_akademik_pilihan'] = $p;
    $data['perubahan'] = \DB::table('data_perubahan_npsn')
                      ->join('tahun_akademik', 'data_perubahan_npsn.kode_tahun_akademik', '=', 'tahun_akademik.kode_tahun_akademik')
                      ->where('data_perubahan_npsn.kode_tahun_akademik', $p)
                      ->get();
    return view('layouts/data_perubahan_npsn', $data);
  }
  public function import(Request $request)
  {
    $d = $request->get('kode_tahun_akademik');
    $request->validate([
        'file' => 'required|mimes:csv,txt'
    ]);
    ExceL::import(new DataPerubahanNPSNImport($d), request()->file('file'));
    return redirect()->back()->with('sukses', 'Import Data Statistik Penghasilan Berhasil!');
  }
}
