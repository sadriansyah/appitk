<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TahunAkademik;
use App\KeketatanProdi;
use App\KeketatanSaintek;
use App\KeketatanSoshum;
class KeketatanController extends Controller
{
  public function prodi(Request $request)
  {
    $p = $request->get('tahun_akademik');
    $data['tahun_akademik'] = TahunAkademik::pluck('tahun_akademik', 'kode_tahun_akademik');
    $data['tahun_akademik_pilihan'] = $p;

    $data['ketat'] = KeketatanProdi::all();
    return view('sbmptn.keketatan_prodi', $data);
  }
  public function importProdi(Request $request)
  {
    $d = $request->get('kode_tahun_akademik');
    $request->validate([
        'file' => 'required'
    ]);
    ExceL::import(new TerimaPTNImport($d), request()->file('file'));
    return redirect()->back()->with('sukses', 'Import Data Terima Per PTN Berhasil!');
  }
  public function saintek(Request $request)
  {
    $p = $request->get('tahun_akademik');
    $data['tahun_akademik'] = TahunAkademik::pluck('tahun_akademik', 'kode_tahun_akademik');
    $data['tahun_akademik_pilihan'] = $p;

    $data['ketat'] = KeketatanSaintek::all();
    return view('sbmptn.keketatan_saintek', $data);
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

    $data['ketat'] = KeketatanSoshum::all();
    return view('sbmptn.keketatan_soshum', $data);
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
