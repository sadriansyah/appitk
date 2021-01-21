<?php

namespace App\Http\Controllers;
use App\NilaiSkala100SMA;
use App\TahunAkademik;
use Illuminate\Http\Request;
use App\Imports\NilaiSkala100SMAImport;
use Maatwebsite\Excel\Facades\ExceL;
class NilaiSkala100SMAController extends Controller
{
    public function index(Request $request)
    {
      $data['listprodi'] = \DB::select("SELECT*FROM prodi");
      $data['tahun'] = \DB::select("SELECT*FROM tahun_akademik order by kode_tahun_akademik ASC");
      $p = $request->get('tahun_akademik');
      $data['tahun_akademik'] = TahunAkademik::pluck('tahun_akademik', 'kode_tahun_akademik');
      $data['tahun_akademik_pilihan'] = $p;
      $data['nilai'] = \DB::table('data_nilai_mapel_un_kolom_sma_skala100')
                        ->join('tahun_akademik', 'data_nilai_mapel_un_kolom_sma_skala100.kode_tahun_akademik', '=', 'tahun_akademik.kode_tahun_akademik')
                        ->where('data_nilai_mapel_un_kolom_sma_skala100.kode_tahun_akademik', $p)
                        ->get();
      return view('layouts/nilai_skala_100_sma', $data);
    }
    public function import(Request $request)
    {
      $d = $request->get('kode_tahun_akademik');
      $request->validate([
          'file' => 'required|mimes:csv,txt'
      ]);
      ExceL::import(new NilaiSkala100SMAImport($d), request()->file('file'));
      return redirect()->back()->with('sukses', 'Import Data Nilai Skala 100 SMA Berhasil!');
    }
}
