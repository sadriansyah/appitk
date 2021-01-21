<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TahunSBMPTN;
use App\KategoriFileSBMPTN;
use App\FileSBMPTN;
class SBMPTNController extends Controller
{
  public function tahun(Request $request)
  {
    $p = $request->get('tahun_akademik');
    //$data['tahun_akademik'] = TahunAkademik::pluck('tahun_akademik', 'kode_tahun_akademik');
    //$data['tahun_akademik_pilihan'] = $p;

    $data['sbm'] = TahunSBMPTN::all();
    return view('sbmptn.tahun_sbmptn',$data);
  }
  public function jenis(Request $request)
  {
    $p = $request->get('tahun_akademik');
    //$data['tahun_akademik'] = TahunAkademik::pluck('tahun_akademik', 'kode_tahun_akademik');
    //$data['tahun_akademik_pilihan'] = $p;

    $data['kategori'] = KategoriFileSBMPTN::all();
    return view('sbmptn.jenis_sbmptn',$data);
  }
  public function tambah(Request $request)
  {
    $request->validate([
        'kode_tahun_akademik' => 'required|unique:tahun_sbmptn|min:4',
        'tahun_akademik' => 'required|min:3',
    ]);
    $akademik = New TahunSBMPTN();
    $akademik->create($request->all());
    return redirect('/tahun_sbmptn')->with('status', 'Data Tahun SBMPTN Berhasil Ditambahkan');
  }
  public function ubah (Request $request, $kode_tahun_akademik)
  {
    $request->validate([
      'tahun_akademik' => 'required|min:3',
    ]);
    $akademik = TahunSBMPTN::where('kode_tahun_akademik', $kode_tahun_akademik);
    $akademik->update($request->except('_method', '_token'));
    return redirect('/tahun_sbmptn')->with('status', 'Data Tahun SBMPTN Berhasil Diupdate');
  }
  public function hapus($kode_tahun_akademik)
  {
    $akademik = TahunSBMPTN::where('kode_tahun_akademik', $kode_tahun_akademik);
    $akademik->delete();
    return redirect('/tahun_sbmptn')->with('status', 'Data Tahun SBMPTN Berhasil Dihapus');;
  }
  public function kategori(Request $request)
  {
    $request->validate([
        'kode_kategori' => 'required|unique:kategori|min:3',
        'kategori' => 'required|min:5',
    ]);
    $akademik = New KategoriFileSBMPTN();
    $akademik->create($request->all());
    return redirect('/jenis_file_sbmptn')->with('status', 'Data Kategori  Berhasil Ditambahkan');
  }
  public function ubahKategori(Request $request, $kode_kategori)
  {
    $request->validate([
      'kategori' => 'required|min:3',
    ]);
    $akademik = KategoriFileSBMPTN::where('kode_kategori', $kode_kategori);
    $akademik->update($request->except('_method', '_token'));
    return redirect('/jenis_file_sbmptn')->with('status', 'Data Kategori Berhasil Diupdate');
  }
  public function hapusKategori($kode_kategori)
  {
    $akademik = KategoriFileSBMPTN::where('kode_kategori', $kode_kategori);
    $akademik->delete();
    return redirect('/jenis_file_sbmptn')->with('status', 'Data Kategori SBMPTN Berhasil Dihapus');;
  }
  public function uploadFile(Request $request)
  {
    $request->validate([
        'file' => 'required',
    ]);
    $file = $request->file('file');
    $name = $file->getClientOriginalName();
    $folder = 'Upload_SBMPTN';
    $file->move($folder, $name);

    $file = new FileSBMPTN;
    $file->kategori = $request->kode_kategori;
    $file->tahun_akademik = $request->kode_tahun_akademik;
    $file->nama_file = $name;
    $file->save();
    //dd($file);
    return redirect()->back()->with('sukses', 'Upload Data Telah Berhasil Dilakukan!');
  }
  public function hapusFile($id)
  {
    $flight = FileSBMPTN::find($id);
    $flight->delete();
      return redirect()->back()->with('sukses', 'Data Telah Berhasil Dihapus!');
  }
}
