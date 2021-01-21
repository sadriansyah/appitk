<?php

namespace App\Http\Controllers;
use App\DataSekolah;
use App\TahunAkademik;
use Illuminate\Http\Request;
use App\Imports\DataSekolahImport;
use Maatwebsite\Excel\Facades\ExceL;
class DataSekolahController extends Controller
{
    public function index(Request $request)
    {
      $data['listprodi'] = \DB::select("SELECT*FROM prodi");
      $data['tahun'] = \DB::select("SELECT*FROM tahun_akademik order by kode_tahun_akademik ASC");
      $p = $request->get('tahun_akademik');
      $data['tahun_akademik'] = TahunAkademik::pluck('tahun_akademik', 'kode_tahun_akademik');
      $data['tahun_akademik_pilihan'] = $p;
      $data['sekolah'] = \DB::table('data_sekolah')
                        ->join('tahun_akademik', 'data_sekolah.kode_tahun_akademik', '=', 'tahun_akademik.kode_tahun_akademik')
                        ->where('data_sekolah.kode_tahun_akademik', $p)
                        ->get();
      return view('layouts/data_sekolah', $data);
    }
    public function import(Request $request)
    {
      $d = $request->get('kode_tahun_akademik');
      $request->validate([
          'file' => 'required|mimes:csv,txt'
      ]);
      ExceL::import(new DataSekolahImport($d), request()->file('file'));
      return redirect()->back()->with('sukses', 'Import Data Sekolah Berhasil!');
    }
}
