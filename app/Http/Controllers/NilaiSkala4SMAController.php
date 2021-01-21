<?php

namespace App\Http\Controllers;
use App\NilaiSkala4SMA;
use App\TahunAkademik;
use Illuminate\Http\Request;
use App\Imports\NilaiSkala4SMAImport;
use Maatwebsite\Excel\Facades\ExceL;
class NilaiSkala4SMAController extends Controller
{
    public function index(Request $request)
    {
      $data['listprodi'] = \DB::select("SELECT*FROM prodi");
      $data['tahun'] = \DB::select("SELECT*FROM tahun_akademik order by kode_tahun_akademik ASC");
      $p = $request->get('tahun_akademik');
      $data['tahun_akademik'] = TahunAkademik::pluck('tahun_akademik', 'kode_tahun_akademik');
      $data['tahun_akademik_pilihan'] = $p;
      $data['nilai'] = \DB::table('data_nilai_mapel_un_kolom_sma_skala4')
                        ->join('tahun_akademik', 'data_nilai_mapel_un_kolom_sma_skala4.kode_tahun_akademik', '=', 'tahun_akademik.kode_tahun_akademik')
                        ->where('data_nilai_mapel_un_kolom_sma_skala4.kode_tahun_akademik', $p)
                        ->get();
      return view('layouts/nilai_skala_4_sma', $data);
    }
    public function import(Request $request)
    {
      $d = $request->get('kode_tahun_akademik');
      $request->validate([
          'file' => 'required|mimes:csv,txt'
      ]);
      ExceL::import(new NilaiSkala4SMAImport($d), request()->file('file'));
      return redirect()->back()->with('sukses', 'Import Data Nilai Mapel UN SMA Skala 4 Berhasil!');
    }
}
