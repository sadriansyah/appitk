<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TahunAkademik;
class TahunAkademikController extends Controller
{
  public function index()
  {
    $akademik = TahunAkademik::all();
    return view('itk.tahun_akademik', compact('akademik'));
  }
  public function store(Request $request)
  {
    $request->validate([
        'kode_tahun_akademik' => 'required|unique:tahun_akademik|min:5',
        'tahun_akademik' => 'required|min:3',
    ]);
    $akademik = New TahunAkademik();
    $akademik->create($request->all());
    return redirect('/tahun_akademik')->with('status', 'Data Tahun Akademik Berhasil Ditambahkan');
  }
  public function update(Request $request, $kode_tahun_akademik)
  {
    $request->validate([
      'tahun_akademik' => 'required|min:3',
    ]);
    $akademik = TahunAkademik::where('kode_tahun_akademik', $kode_tahun_akademik);
    $akademik->update($request->except('_method', '_token'));
    return redirect('/tahun_akademik')->with('status', 'Data Tahun Akademik Berhasil Diupdate');
  }
  public function destroy($kode_tahun_akademik)
  {
    $akademik = TahunAkademik::where('kode_tahun_akademik', $kode_tahun_akademik);
    $akademik->delete();
    return redirect('/tahun_akademik')->with('status', 'Data Tahun Akademik Berhasil Dihapus');;
  }
}
