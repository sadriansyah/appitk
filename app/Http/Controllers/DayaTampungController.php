<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProdiITK;
use App\DayaTampung;
use DataTables;
class DayaTampungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function json()
    {
      return Datatables::of(DayaTampung::all())->make(true);
    }

    public function index()
    {
      $data['prodi'] = ProdiITK::pluck('nama_prodi', 'kode_prodi');
      $data['daya_tampung'] = \DB::table('daya_tampung')
                          ->join('prodi', 'prodi.kode_prodi', '=', 'daya_tampung.kode_prodi')
                          ->get();
      return view('daya_tampung.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
          'kapasitas' => 'required',
      ]);
      $daya_tampung = New DayaTampung();
      $daya_tampung->create($request->all());
      return redirect('/daya_tampung')->with('status', 'Data Prodi Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode_prodi)
    {
      $request->validate([
        'kapasitas' => 'required',
      ]);
      $daya_tampung = DayaTampung::where('kode_prodi', $kode_prodi);
      $daya_tampung->update($request->except('_method', '_token'));
      return redirect('/daya_tampung')->with('status', 'Data Daya Tampung Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_prodi)
    {
      $daya_tampung = DayaTampung::where('kode_prodi', $kode_prodi);
      $daya_tampung->delete();
      return redirect('/daya_tampung')->with('status', 'Data Daya Tampung Berhasil Dihapus');
    }
}
