<?php

namespace App\Http\Controllers;
use App\DataSiswa;
use App\TahunAkademik;
use Illuminate\Http\Request;
use App\Imports\DataSiswaImport;
use Maatwebsite\Excel\Facades\ExceL;
class DataSiswaController extends Controller
{
    public function index(Request $request)
    {
      $data['listprodi'] = \DB::select("SELECT*FROM prodi");
      $data['tahun'] = \DB::select("SELECT*FROM tahun_akademik order by kode_tahun_akademik ASC");
      $p = $request->get('tahun_akademik');
      $data['tahun_akademik'] = TahunAkademik::pluck('tahun_akademik', 'kode_tahun_akademik');
      $data['tahun_akademik_pilihan'] = $p;
      $data['siswa'] = \DB::table('data_siswa')
                        ->join('tahun_akademik', 'data_siswa.kode_tahun_akademik', '=', 'tahun_akademik.kode_tahun_akademik')
                        ->where('data_siswa.kode_tahun_akademik', $p)
                        ->get();
      return view('layouts/data_siswa', $data);
    }
    public function import(Request $request)
    {
      $d = $request->get('kode_tahun_akademik');
      $request->validate([
          'file' => 'required|mimes:csv,txt'
      ]);
      ExceL::import(new DataSiswaImport($d), request()->file('file'));
      return redirect()->back()->with('sukses', 'Import Data Siswa Berhasil!');
    }
}
