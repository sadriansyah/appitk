<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\KelasImport;
use App\Imports\DataKelasSiswaImport;
use Maatwebsite\Excel\Facades\ExceL;
use App\Kelas;
use App\TahunAkademik;
use App\DataKelasSiswa;
class KelasController extends Controller
{
    public function index(Request $request)
    {
      $data['listprodi'] = \DB::select("SELECT*FROM prodi");
      $data['tahun'] = \DB::select("SELECT*FROM tahun_akademik order by kode_tahun_akademik ASC");
      $p = $request->get('tahun_akademik');
      $data['tahun_akademik'] = TahunAkademik::pluck('tahun_akademik', 'kode_tahun_akademik');
      $data['tahun_akademik_pilihan'] = $p;
      $data['kelas'] = \DB::table('data_kelas')
                        ->join('tahun_akademik', 'data_kelas.kode_tahun_akademik', '=', 'tahun_akademik.kode_tahun_akademik')
                        ->where('data_kelas.kode_tahun_akademik', $p)
                        ->get();
      return view('layouts/kelas', $data);
    }
    public function import(Request $request)
    {
      $d = $request->get('kode_tahun_akademik');
      $request->validate([
          'file' => 'required|mimes:csv,txt'
      ]);
      ExceL::import(new KelasImport($d), request()->file('file'));
      return redirect()->back()->with('sukses', 'Import Data Kelas Berhasil!');
    }
    public function index1(Request $request)
    {
      $data['listprodi'] = \DB::select("SELECT*FROM prodi");
      $data['tahun'] = \DB::select("SELECT*FROM tahun_akademik order by kode_tahun_akademik ASC");
      $p = $request->get('tahun_akademik');
      $data['tahun_akademik'] = TahunAkademik::pluck('tahun_akademik', 'kode_tahun_akademik');
      $data['tahun_akademik_pilihan'] = $p;
      $data['datkel'] = \DB::table('data_kelas_siswa')
                        ->join('tahun_akademik', 'data_kelas_siswa.kode_tahun_akademik', '=', 'tahun_akademik.kode_tahun_akademik')
                        ->where('data_kelas_siswa.kode_tahun_akademik', $p)
                        ->get();
      return view('layouts/data_kelas_siswa', $data);
    }
    public function import1(Request $request)
    {
      $d = $request->get('kode_tahun_akademik');
      $request->validate([
          'file' => 'required|mimes:csv,txt'
      ]);
      ExceL::import(new DataKelasSiswaImport($d), request()->file('file'));
      return redirect()->back()->with('sukses', 'Import Data Kelas Siswa Berhasil!');
    }
}
