<?php

namespace App\Http\Controllers;
use App\DataKaryaPortofolio;
use App\TahunAkademik;
use App\DataPortofolio;
use Illuminate\Http\Request;
use App\Imports\DataKaryaPortofolioImport;
use App\Imports\DataPortofolioImport;
use Maatwebsite\Excel\Facades\ExceL;
class DataKaryaPortofolioController extends Controller
{
    public function index(Request $request)
    {
      $data['listprodi'] = \DB::select("SELECT*FROM prodi");
      $data['tahun'] = \DB::select("SELECT*FROM tahun_akademik order by kode_tahun_akademik ASC");
      $p = $request->get('tahun_akademik');
      $data['tahun_akademik'] = TahunAkademik::pluck('tahun_akademik', 'kode_tahun_akademik');
      $data['tahun_akademik_pilihan'] = $p;
      $data['karya'] = \DB::table('data_karya_portofolio')
                        ->join('tahun_akademik', 'data_karya_portofolio.kode_tahun_akademik', '=', 'tahun_akademik.kode_tahun_akademik')
                        ->where('data_karya_portofolio.kode_tahun_akademik', $p)
                        ->get();
      return view('layouts/data_karya_portofolio',$data);
    }
    public function import(Request $request)
    {
      $d = $request->get('kode_tahun_akademik');
      $request->validate([
          'file' => 'required|mimes:csv,txt'
      ]);
      ExceL::import(new DataKaryaPortofolioImport($d), request()->file('file'));
      return redirect()->back()->with('sukses', 'Import Data Karya Portofolio Berhasil!');
    }
    public function index1(Request $request)
    {
      $data['listprodi'] = \DB::select("SELECT*FROM prodi");
      $data['tahun'] = \DB::select("SELECT*FROM tahun_akademik order by kode_tahun_akademik ASC");
      $p = $request->get('tahun_akademik');
      $data['tahun_akademik'] = TahunAkademik::pluck('tahun_akademik', 'kode_tahun_akademik');
      $data['tahun_akademik_pilihan'] = $p;
      $data['portofolio'] = \DB::table('data_portofolio')
                        ->join('tahun_akademik', 'data_portofolio.kode_tahun_akademik', '=', 'tahun_akademik.kode_tahun_akademik')
                        ->where('data_portofolio.kode_tahun_akademik', $p)
                        ->get();
      return view('layouts/data_portofolio',$data );
    }
    public function import1(Request $request)
    {
      $d = $request->get('kode_tahun_akademik');
      $request->validate([
          'file' => 'required|mimes:csv,txt'
      ]);
      ExceL::import(new DataPortofolioImport($d), request()->file('file'));
      return redirect()->back()->with('sukses', 'Import Data Portofolio Berhasil!');
    }
}
