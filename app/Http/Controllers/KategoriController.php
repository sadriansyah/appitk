<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TahunAkademik;
use App\TahunSBMPTN;
use App\FileSBMPTN;
use App\KategoriFileSBMPTN;
class KategoriController extends Controller
{
    public function index()
    {
      $data['listprodi'] = \DB::select("SELECT*FROM prodi");
      $data['tahun'] = \DB::select("SELECT*FROM tahun_akademik order by kode_tahun_akademik ASC");
      return view('itk/snmptn',$data);
    }
    public function index1(Request $request)
    {
      $p = $request->get('tahun_akademik');
      $data['tahun_akademik'] = TahunSBMPTN::pluck('tahun_akademik', 'kode_tahun_akademik');
      $data['tahun_akademik_pilihan'] = $p;
      $a = $request->get('kategori');
      $data['kategori'] = KategoriFileSBMPTN::pluck('kategori', 'kode_kategori');
      $data['kategori_pilihan'] = $a;
      //$data['file'] = FileSBMPTN::all();
      $data['file'] = \DB::table('file_sbmptn')
            ->join('kategori', 'file_sbmptn.kode_kategori', '=', 'kategori.kode_kategori')
            ->join('tahun_sbmptn', 'file_sbmptn.kode_tahun_akademik', '=', 'tahun_sbmptn.kode_tahun_akademik')
            //->where('file.kode_seksi', 'seksi.kode_seksi')
            ->where('file_sbmptn.kode_tahun_akademik', $p)
            ->where('file_sbmptn.kode_kategori', $a)
            ->get();
      return view('itk/file_sbmptn',$data);
    }
}
