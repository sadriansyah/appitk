<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TahunAkademik;
use App\NilaiSaintek;
use App\NilaiSoshum;

class TerimaNilaiPTNController extends Controller
{
  public function saintek(Request $request)
  {
    $p = $request->get('tahun_akademik');
    $data['tahun_akademik'] = TahunAkademik::pluck('tahun_akademik', 'kode_tahun_akademik');
    $data['tahun_akademik_pilihan'] = $p;

    $data['nilai'] = NilaiSaintek::all();
    return view('sbmptn.nilai_saintek', $data);
  }
  public function importSaintek(Request $request)
  {
    $d = $request->get('kode_tahun_akademik');
    $request->validate([
        'file' => 'required'
    ]);
    ExceL::import(new TerimaPTNImport($d), request()->file('file'));
    return redirect()->back()->with('sukses', 'Import Data Terima Per PTN Berhasil!');
  }
  public function soshum(Request $request)
  {
    $p = $request->get('tahun_akademik');
    $data['tahun_akademik'] = TahunAkademik::pluck('tahun_akademik', 'kode_tahun_akademik');
    $data['tahun_akademik_pilihan'] = $p;

    $data['nilai'] = NilaiSoshum::all();
    return view('sbmptn.nilai_soshum', $data);
  }
  public function importSoshum(Request $request)
  {
    $d = $request->get('kode_tahun_akademik');
    $request->validate([
        'file' => 'required'
    ]);
    ExceL::import(new TerimaPTNImport($d), request()->file('file'));
    return redirect()->back()->with('sukses', 'Import Data Terima Per PTN Berhasil!');
  }
}
