<?php

namespace App\Http\Controllers;
use App\DataJurusan;
use App\TahunAkademik;
use Illuminate\Http\Request;
use App\Imports\DataJurusanImport;
use Maatwebsite\Excel\Facades\ExceL;
class JurusanController extends Controller
{
    public function index(Request $request)
    {
      $data['listprodi'] = \DB::select("SELECT*FROM prodi");
      $data['tahun'] = \DB::select("SELECT*FROM tahun_akademik order by kode_tahun_akademik ASC");
      $p = $request->get('tahun_akademik');
      $data['tahun_akademik'] = TahunAkademik::pluck('tahun_akademik', 'kode_tahun_akademik');
      $data['tahun_akademik_pilihan'] = $p;
      $data['jurusan'] = \DB::table('data_jurusan')
                        ->join('tahun_akademik', 'data_jurusan.kode_tahun_akademik', '=', 'tahun_akademik.kode_tahun_akademik')
                        ->where('data_jurusan.kode_tahun_akademik', $p)
                        ->get();
      return view('layouts/data_jurusan',$data);
    }
    public function import(Request $request)
    {
      $d = $request->get('kode_tahun_akademik');
      $request->validate([
          'file' => 'required|mimes:csv,txt'
      ]);
    	ExceL::import(new DataJurusanImport($d), request()->file('file'));
      return redirect()->back()->with('sukses', 'Import Data Jurusan Berhasil!');
    }
}
