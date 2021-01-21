<?php

namespace App\Http\Controllers;
use App\DataPilihan;
use App\TahunAkademik;
use Illuminate\Http\Request;
use App\Imports\DataPilihanImport;
use Maatwebsite\Excel\Facades\ExceL;
class DataPilihanController extends Controller
{
    public function index(Request $request)
    {
      $data['listprodi'] = \DB::select("SELECT*FROM prodi");
      $data['tahun'] = \DB::select("SELECT*FROM tahun_akademik order by kode_tahun_akademik ASC");
      $p = $request->get('tahun_akademik');
      $data['tahun_akademik'] = TahunAkademik::pluck('tahun_akademik', 'kode_tahun_akademik');
      $data['tahun_akademik_pilihan'] = $p;
      $data['pilihan'] = \DB::table('data_pilihan')
                        ->join('tahun_akademik', 'data_pilihan.kode_tahun_akademik', '=', 'tahun_akademik.kode_tahun_akademik')
                        ->where('data_pilihan.kode_tahun_akademik', $p)
                        ->get();
      return view('layouts/data_pilihan', $data);
    }
    public function import(Request $request)
    {
      $d = $request->get('kode_tahun_akademik');
      $request->validate([
          'file' => 'required|mimes:csv,txt'
      ]);
      ExceL::import(new DataPilihanImport($d), request()->file('file'));
      return redirect()->back()->with('sukses', 'Import Data Pilihan Berhasil!');
    }
}
