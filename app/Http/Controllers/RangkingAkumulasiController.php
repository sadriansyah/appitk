<?php

namespace App\Http\Controllers;
use App\RangkingAkumulasi;
use App\TahunAkademik;
use Illuminate\Http\Request;
use App\Imports\RangkingAkumulasiImport;
use Maatwebsite\Excel\Facades\ExceL;
class RangkingAkumulasiController extends Controller
{
    public function index(Request $request)
    {
      $data['listprodi'] = \DB::select("SELECT*FROM prodi");
      $data['tahun'] = \DB::select("SELECT*FROM tahun_akademik order by kode_tahun_akademik ASC");
      $p = $request->get('tahun_akademik');
      $data['tahun_akademik'] = TahunAkademik::pluck('tahun_akademik', 'kode_tahun_akademik');
      $data['tahun_akademik_pilihan'] = $p;
      $data['ranking'] = \DB::table('ranking_akumulasi')
                        ->join('tahun_akademik', 'ranking_akumulasi.kode_tahun_akademik', '=', 'tahun_akademik.kode_tahun_akademik')
                        ->where('ranking_akumulasi.kode_tahun_akademik', $p)
                        ->get();
      return view('layouts/rangking_akumulasi', $data);
    }
    public function import(Request $request)
    {
      $d = $request->get('kode_tahun_akademik');
      $request->validate([
          'file' => 'required|mimes:csv,txt'
      ]);
      ExceL::import(new RangkingAkumulasiImport($d), request()->file('file'));
      return redirect()->back()->with('sukses', 'Import Data Ranking Akumulasi Berhasil!');
    }
}
