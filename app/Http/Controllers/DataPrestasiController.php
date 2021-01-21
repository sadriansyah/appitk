<?php

namespace App\Http\Controllers;
use App\DataPrestasi;
use Illuminate\Http\Request;
use App\TahunAkademik;
use App\Imports\DataPrestasiImport;
use Maatwebsite\Excel\Facades\ExceL;
class DataPrestasiController extends Controller
{
    public function index(Request $request)
    {
      $data['listprodi'] = \DB::select("SELECT*FROM prodi");
      $data['tahun'] = \DB::select("SELECT*FROM tahun_akademik order by kode_tahun_akademik ASC");
      $p = $request->get('tahun_akademik');
      $data['tahun_akademik'] = TahunAkademik::pluck('tahun_akademik', 'kode_tahun_akademik');
      $data['tahun_akademik_pilihan'] = $p;
      $data['prestasi'] = \DB::table('data_prestasi')
                        ->join('tahun_akademik', 'data_prestasi.kode_tahun_akademik', '=', 'tahun_akademik.kode_tahun_akademik')
                        ->where('data_prestasi.kode_tahun_akademik', $p)
                        ->get();
      return view('layouts/data_prestasi', $data);
    }
    public function import(Request $request)
    {
      $d = $request->get('kode_tahun_akademik');
      $request->validate([
          'file' => 'required|mimes:csv,txt'
      ]);
      ExceL::import(new DataPrestasiImport($d), request()->file('file'));
      return redirect()->back()->with('sukses', 'Import Data Prestasi Berhasil!');
    }
}
