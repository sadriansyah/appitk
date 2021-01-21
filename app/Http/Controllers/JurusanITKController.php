<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JurusanITK;

class JurusanITKController extends Controller
{

    public function index()
    {
      $jurusan = JurusanITK::all();
      return view('itk.jurusan', compact('jurusan'));
    }
    public function store(Request $request)
    {
      $request->validate([
          'kode_jurusan' => 'required|unique:jurusan|min:3',
          'nama_jurusan' => 'required|min:3',
      ]);
      $jurusan = New JurusanITK();
      $jurusan->create($request->all());
      return redirect('/jurusan')->with('status', 'Data Jurusan Berhasil Ditambahkan');

    }
    public function update(Request $request, $kode_jurusan)
    {
      $request->validate([
        'kode_jurusan' => 'required|min:3',
        'nama_jurusan' => 'required|min:3',
      ]);
      $jurusan = JurusanITK::where('kode_jurusan', $kode_jurusan);
      $jurusan->update($request->except('_method', '_token'));
      return redirect('/jurusan')->with('status', 'Data Jurusan Berhasil Diupdate');
    }
    public function destroy($kode_jurusan)
    {
      $jurusan = JurusanITK::where('kode_jurusan', $kode_jurusan);
      $jurusan->delete();
      return redirect('/jurusan')->with('status', 'Data Jurusan Berhasil Dihapus');
    }
}
