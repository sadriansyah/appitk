<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TahunAkademik;
use App\TerimaPTN;
use App\Imports\TerimaPTNImport;
use Maatwebsite\Excel\Facades\ExceL;
class TerimaPTNController extends Controller
{
  public function index(Request $request)
  {
    $p = $request->get('tahun_akademik');
    $data['tahun_akademik'] = TahunAkademik::pluck('tahun_akademik', 'kode_tahun_akademik');
    $data['tahun_akademik_pilihan'] = $p;

    $data['terima'] = TerimaPTN::all();
    return view('sbmptn.terima_ptn', $data);
  }
  public function import(Request $request)
  {
    $d = $request->get('kode_tahun_akademik');
    $request->validate([
        'file' => 'required'
    ]);
    ExceL::import(new TerimaPTNImport($d), request()->file('file'));
    return redirect()->back()->with('sukses', 'Import Data Terima Per PTN Berhasil!');
  }
}
