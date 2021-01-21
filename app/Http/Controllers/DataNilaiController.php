<?php

namespace App\Http\Controllers;
use App\DataNIlai;
use App\TahunAkademik;
use Illuminate\Http\Request;
use App\Imports\DataNilaiImport;
use Maatwebsite\Excel\Facades\ExceL;
class DataNilaiController extends Controller
{
    public function __construct()
    {
        set_time_limit(8000000);
    }
    public function index(Request $request)
    {
      $data['listprodi'] = \DB::select("SELECT*FROM prodi");
      $data['tahun'] = \DB::select("SELECT*FROM tahun_akademik order by kode_tahun_akademik ASC");
        $p = $request->get('tahun_akademik');
      $data['tahun_akademik'] = TahunAkademik::pluck('tahun_akademik', 'kode_tahun_akademik');
      $data['tahun_akademik_pilihan'] = $p;
      //$data['nilai'] = DataNIlai::paginate(100);
        $data['nilai'] = \DB::table('data_nilai')
                          ->join('tahun_akademik', 'data_nilai.kode_tahun_akademik', '=', 'tahun_akademik.kode_tahun_akademik')

                          ->where('data_nilai.kode_tahun_akademik', $p)
                          ->limit(3000)
                          ->get();
        return view('layouts/data_nilai', $data);
    }
    public function import(Request $request)
    {
      $d = $request->get('kode_tahun_akademik');
      $request->validate([
          'file' => 'required|mimes:csv,txt'
      ]);
    	ExceL::import(new DataNilaiImport($d), request()->file('file'));
      return redirect()->back()->with('sukses', 'Import Data Nilai Berhasil!');
    }
}
