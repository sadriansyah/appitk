<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TahunAkademik;
class BiodataController extends Controller
{
  public function index(Request $request)
  {
    $p = $request->get('tahun_akademik');
    $data['tahun_akademik'] = TahunAkademik::pluck('tahun_akademik', 'kode_tahun_akademik');
    $data['tahun_akademik_pilihan'] = $p;
    $data['biodata'] = \DB::table('biodata_terima')
                      ->join('tahun_akademik', 'biodata_terima.kode_tahun_akademik', '=', 'tahun_akademik.kode_tahun_akademik')
                      ->where('biodata_terima.kode_tahun_akademik', $p)
                      ->get();
    return view('sbmptn/biodata_terima', $data);
  }
  public function import(Request $request)
  {
    $d = $request->get('kode_tahun_akademik');
    $request->validate([
        'file' => 'required|mimes:csv,txt'
    ]);
    ExceL::import(new BiodataTerimaImport($d), request()->file('file'));
    return redirect()->back()->with('sukses', 'Import Data Biodata Penerima Berhasil!');
  }
  public function index1(Request $request)
  {
    $p = $request->get('tahun_akademik');
    $data['tahun_akademik'] = TahunAkademik::pluck('tahun_akademik', 'kode_tahun_akademik');
    $data['tahun_akademik_pilihan'] = $p;
    $data['biodata'] = \DB::table('biodata_terima_bidikmisi')
                      ->join('tahun_akademik', 'biodata_terima_bidikmisi.kode_tahun_akademik', '=', 'tahun_akademik.kode_tahun_akademik')
                      ->where('biodata_terima_bidikmisi.kode_tahun_akademik', $p)
                      ->get();
    return view('sbmptn/biodata_terima_bidikmisi', $data);
  }
  public function import1(Request $request)
  {
    $d = $request->get('kode_tahun_akademik');
    $request->validate([
        'file' => 'required|mimes:csv,txt'
    ]);
    ExceL::import(new BiodataTerimabidikmisiImport($d), request()->file('file'));
    return redirect()->back()->with('sukses', 'Import Data Biodata Penerima Bidikmisi Berhasil!');
  }
}
