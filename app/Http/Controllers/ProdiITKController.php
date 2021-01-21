<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JurusanITK;
use App\ProdiITK;
class ProdiITKController extends Controller
{
  public function index()
  {
    $data['jurusan'] = JurusanITK::pluck('nama_jurusan', 'kode_jurusan');
    $data['prodi'] = \DB::table('prodi')
                        ->join('jurusan', 'prodi.kode_jurusan', '=', 'jurusan.kode_jurusan')
                        ->get();
    return view('itk.prodi',$data);
  }
  public function store(Request $request)
  {
    $request->validate([
        'kode_prodi' => 'required|unique:prodi|min:2',
        'nama_prodi' => 'required|min:3',
    ]);
    $prodi = New ProdiITK();
    $prodi->create($request->all());
    return redirect('/prodi')->with('status', 'Data Prodi Berhasil Ditambahkan');
  }
  public function update(Request $request, $kode_prodi)
  {
    $request->validate([
      'kode_prodi' => 'required|min:2',
      'nama_prodi' => 'required|min:3',
    ]);
    $prodi = ProdiITK::where('kode_prodi', $kode_prodi);
    $prodi->update($request->except('_method', '_token'));
    return redirect('/prodi')->with('status', 'Data Prodi Berhasil Diupdate');
  }
  public function destroy($kode_prodi)
  {
    $prodi = ProdiITK::where('kode_prodi', $kode_prodi);
    $prodi->delete();
    return redirect('/prodi')->with('status', 'Data Prodi Berhasil Dihapus');
  }
}
