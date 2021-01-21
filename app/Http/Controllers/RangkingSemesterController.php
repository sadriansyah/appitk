<?php

namespace App\Http\Controllers;
use App\RangkingSemester;
use App\TahunAkademik;
use Illuminate\Http\Request;
use App\Imports\RangkingSemesterImport;
use Maatwebsite\Excel\Facades\ExceL;
class RangkingSemesterController extends Controller
{
    public function index(Request $request)
    {
      $data['listprodi'] = \DB::select("SELECT*FROM prodi");
      $data['tahun'] = \DB::select("SELECT*FROM tahun_akademik order by kode_tahun_akademik ASC");
      $p = $request->get('tahun_akademik');
      $data['tahun_akademik'] = TahunAkademik::pluck('tahun_akademik', 'kode_tahun_akademik');
      $data['tahun_akademik_pilihan'] = $p;
      $data['semester'] = \DB::table('ranking_semester')
                        ->join('tahun_akademik', 'ranking_semester.kode_tahun_akademik', '=', 'tahun_akademik.kode_tahun_akademik')
                        ->where('ranking_semester.kode_tahun_akademik', $p)
                        ->get();
      return view('layouts/rangking_semester', $data);
    }
    public function import(Request $request)
    {
      $d = $request->get('kode_tahun_akademik');
      $request->validate([
          'file' => 'required|mimes:csv,txt'
      ]);
      ExceL::import(new RangkingSemesterImport($d), request()->file('file'));
      return redirect()->back()->with('sukses', 'Import Data Ranking Semester Berhasil!');
    }
}
