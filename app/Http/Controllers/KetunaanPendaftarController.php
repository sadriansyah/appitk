<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TahunAkademik;
use App\KetunaanPendaftar;
use App\Imports\KetunaanPendaftarImport;
use Maatwebsite\Excel\Facades\ExceL;
class KetunaanPendaftarController extends Controller
{
  public function index(Request $request)
  {
    $data['listprodi'] = \DB::select("SELECT*FROM prodi");
    $data['tahun'] = \DB::select("SELECT*FROM tahun_akademik order by kode_tahun_akademik ASC");
    $p = $request->get('tahun_akademik');
    $data['tahun_akademik'] = TahunAkademik::pluck('tahun_akademik', 'kode_tahun_akademik');
    $data['tahun_akademik_pilihan'] = $p;
    $data['ketunaan'] = \DB::table('ketunaan_pendaftar')
                      ->join('tahun_akademik', 'ketunaan_pendaftar.kode_tahun_akademik', '=', 'tahun_akademik.kode_tahun_akademik')
                      ->where('ketunaan_pendaftar.kode_tahun_akademik', $p)
                      ->get();
    return view('layouts.ketunaan_pendaftar', $data);
  }
  public function import(Request $request)
  {
    $d = $request->get('kode_tahun_akademik');
    $request->validate([
        'file' => 'required'
    ]);
    ExceL::import(new KetunaanPendaftarImport($d), request()->file('file'));
    return redirect()->back()->with('sukses', 'Import Data Ketunaan Pendaftar Berhasil!');
  }
}
