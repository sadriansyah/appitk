<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\BobotNilai;
class KriteriaNilaiController extends Controller
{
    public function index()
    {
      $bobot = BobotNilai::all();
      $tahun = DB::select("SELECT DISTINCT tahun_akademik FROM kriteria_nilai");
      $tmbhtahun = DB::select("SELECT*FROM tahun_akademik");
      return view('itk.kriteria_nilai', ['bobot' => $bobot, 'tahun' => $tahun, 'tambahtahun' => $tmbhtahun]);
    }
    function indexfilter($tahun){
      $bobot = DB::select("SELECT*FROM kriteria_nilai WHERE tahun_akademik='$tahun'");
      $tahun = DB::select("SELECT DISTINCT tahun_akademik FROM kriteria_nilai");
      $tmbhtahun = DB::select("SELECT*FROM tahun_akademik");
      return view('itk.kriteria_nilai', ['bobot' => $bobot, 'tahun' => $tahun, 'tambahtahun' => $tmbhtahun]);
    }

    function filterbytahun(Request $req){
      $tahun = $req->tahun;
      return redirect("/kriteria_nilai/$tahun");
    }
    public function tambah(Request $request)
    {
      $request->validate([
          'kriteria' => 'required',
          'bobot' => 'required',
      ]);
      $bobot = New BobotNilai();
      $bobot->create($request->all());
      return redirect('/kriteria_nilai')->with('status', 'Kriteria Nilai Berhasil Ditambahkan');
    }
    function tambahtahun(Request $req){
      $tahun = $req->tahun_akademik;
      $bobot = DB::select("INSERT INTO kriteria_nilai VALUES(null,'X1','0',NOW(),NOW(),'$tahun')");
      $bobot = DB::select("INSERT INTO kriteria_nilai VALUES(null,'X2','0',NOW(),NOW(),'$tahun')");
      $bobot = DB::select("INSERT INTO kriteria_nilai VALUES(null,'X3','0',NOW(),NOW(),'$tahun')");
      $bobot = DB::select("INSERT INTO kriteria_nilai VALUES(null,'X6','0',NOW(),NOW(),'$tahun')");
      $bobot = DB::select("INSERT INTO kriteria_nilai VALUES(null,'X9','0',NOW(),NOW(),'$tahun')");
      $bobot = DB::select("INSERT INTO kriteria_nilai VALUES(null,'X11','0',NOW(),NOW(),'$tahun')");
      return redirect('/kriteria_nilai');
    }


    public function edit(Request $request, $id)
    {
      $request->validate([
        'kriteria' => 'required',
        'bobot' => 'required',
      ]);
      $bobot = BobotNilai::where('id', $id);
      $bobot->update($request->except('_method', '_token'));
      return redirect('/kriteria_nilai')->with('status', 'Kriteria Nilai Berhasil Diupdate');
    }
    public function hapus($id)
    {
      $bobot = BobotNilai::where('id', $id);
      $bobot->delete();
      return redirect()->back()->with('status', 'Kriteria Nilai Berhasil Dihapus');
    }
    public function juara(Request $request)
    {
      $juara = \DB::table('data_prestasi')
                ->where('id_prestasi', $request->id_prestasi)
                ->update(['juara'         => $request->juara,
                        ]);
    }
}
