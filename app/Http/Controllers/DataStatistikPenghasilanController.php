<?php

namespace App\Http\Controllers;
use App\DataStatistikPenghasilan;
use Illuminate\Http\Request;
use App\Imports\DataStatistikPenghasilanImport;
use App\Imports\PenghasilanIbuImport;
use Maatwebsite\Excel\Facades\ExceL;
use App\TahunAkademik;
class DataStatistikPenghasilanController extends Controller
{
    public function index(Request $request)
    {
      $data['listprodi'] = \DB::select("SELECT*FROM prodi");
      $data['tahun'] = \DB::select("SELECT*FROM tahun_akademik order by kode_tahun_akademik ASC");
        $p = $request->get('tahun_akademik');
        $data['tahun_akademik'] = TahunAkademik::pluck('tahun_akademik', 'kode_tahun_akademik');
        $data['tahun_akademik_pilihan'] = $p;
        $data['statistik'] = \DB::table('data_statistik_penghasilan')
                          ->join('tahun_akademik', 'data_statistik_penghasilan.kode_tahun_akademik', '=', 'tahun_akademik.kode_tahun_akademik')
                          ->where('data_statistik_penghasilan.kode_tahun_akademik', $p)
                          ->get();
        return view('layouts/data_statistik_penghasilan',$data);
    }
    public function import(Request $request)
    {
      $d = $request->get('kode_tahun_akademik');
      //dd($d);
      $request->validate([
          'file' => 'required|mimes:csv,txt'
      ]);
      ExceL::import(new DataStatistikPenghasilanImport($d), request()->file('file'));
      //$d = new DataStatistikPenghasilan;
      //$d->save();
    	//return back();
      return redirect()->back()->with('sukses', 'Import Data Statistik Penghasilan Berhasil!');
    }
      public function index1(Request $request)
      {
        $data['listprodi'] = \DB::select("SELECT*FROM prodi");
        $data['tahun'] = \DB::select("SELECT*FROM tahun_akademik order by kode_tahun_akademik ASC");
          $p = $request->get('tahun_akademik');
          $data['tahun_akademik'] = TahunAkademik::pluck('tahun_akademik', 'kode_tahun_akademik');
          $data['tahun_akademik_pilihan'] = $p;
          $data['penghasilan'] = \DB::table('penghasilan_ibu')
                            ->join('tahun_akademik', 'penghasilan_ibu.kode_tahun_akademik', '=', 'tahun_akademik.kode_tahun_akademik')
                            ->where('penghasilan_ibu.kode_tahun_akademik', $p)
                            ->get();
          return view('layouts/data_statistik_penghasilan_ibu',$data);
      }
      public function import1(Request $request)
      {
        $d = $request->get('kode_tahun_akademik');
        $request->validate([
            'file' => 'required|mimes:csv,txt'
        ]);
        ExceL::import(new PenghasilanIbuImport($d), request()->file('file'));
        return redirect()->back()->with('sukses', 'Import Data Statistik Penghasilan Ibu Berhasil!');
    }
}
