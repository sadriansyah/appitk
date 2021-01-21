@extends('template/master')
@section('prodi')
   @if(auth()->user()->role == 'superadmin' or auth()->user()->role == 'admin_data')
<li>
    <a href="javascript:void(0);" class="menu-toggle">
        <i class="material-icons">import_export</i>
        <span>Import Data</span>
    </a>
    <ul class="ml-menu">
  <li>
    <a href="{{url('/testcsv')}}">
        <i class="material-icons">text_fields</i>
        <span>Test import</span>
    </a>
  </li>
  <li>
    <a href="{{url('/data_jurusan')}}">
        <i class="material-icons">layers</i>
        <span>Data Jurusan</span>
    </a>
  </li>
  <li>
    <a href="{{url('/data_karya_portofolio')}}">
        <i class="material-icons">layers</i>
        <span>Data Karya Portofolio</span>
    </a>
  </li>
  <li>
    <a href="{{url('/data_kelas')}}">
        <i class="material-icons">layers</i>
        <span>Data Kelas</span>
    </a>
  </li>
  <li>
    <a href="{{url('/data_kelas_siswa')}}">
        <i class="material-icons">layers</i>
        <span>Data Kelas Siswa</span>
    </a>
  </li>
  <li>
    <a href="{{url('/data_ketunaan_pendaftar')}}">
        <i class="material-icons">layers</i>
        <span>Data Ketunaan Pendaftar</span>
    </a>
  </li>
<li>
    <a href="{{url('/data_nilai')}}">
        <i class="material-icons">layers</i>
        <span>Data Nilai</span>
    </a>
</li>
<li>
    <a href="{{url('/data_nilai_skala_4_sma')}}">
        <i class="material-icons">layers</i>
        <span>Data Nilai UN Skala 4 SMA</span>
    </a>
</li>
<li>
<li>
    <a href="{{url('/data_nilai_skala_100_sma')}}">
        <i class="material-icons">layers</i>
        <span>Data Nilai UN Skala 100 SMA</span>
    </a>
</li>
<li>
<li>
    <a href="{{url('/data_nilai_skala_4_smk')}}">
        <i class="material-icons">layers</i>
        <span>Data Nilai UN Skala 4 SMK</span>
    </a>
</li>
<li>
<li>
    <a href="{{url('/data_nilai_skala_100_smk')}}">
        <i class="material-icons">layers</i>
        <span>Data Nilai UN Skala 100 SMK</span>
    </a>
</li>
<li>
    <a href="{{url('/data_nilai_status_tambahan')}}">
        <i class="material-icons">layers</i>
        <span>Data Nilai Status Tambahan</span>
    </a>
</li>
<li>
    <a href="{{url('/data_nilai_tidak_ada')}}">
        <i class="material-icons">layers</i>
        <span>Data Nilai Tidak Ada</span>
    </a>
</li>
<li>
    <a href="{{url('/data_perubahan_npsn')}}">
        <i class="material-icons">layers</i>
        <span>Data Perubahan NPSN</span>
    </a>
</li>
<li>
    <a href="{{url('/data_pilihan')}}">
        <i class="material-icons">layers</i>
        <span>Data Pilihan</span>
    </a>
</li>
<li>
    <a href="{{url('/data_portofolio')}}">
        <i class="material-icons">layers</i>
        <span>Data Portofolio</span>
    </a>
</li>
<li>
    <a href="{{url('/data_prestasi')}}">
        <i class="material-icons">layers</i>
        <span>Data Prestasi</span>
    </a>
</li>
<li>
    <a href="{{url('/data_sekolah')}}">
        <i class="material-icons">layers</i>
        <span>Data Sekolah</span>
    </a>
</li>
<li>
    <a href="{{url('/data_siswa')}}">
        <i class="material-icons">layers</i>
        <span>Data Siswa</span>
    </a>
</li>
<li>
    <a href="{{url('/data_statistik_penghasilan')}}">
        <i class="material-icons">layers</i>
        <span>Data Statistik Penghasilan Ayah</span>
    </a>
</li>
<li>
    <a href="{{url('/data_statistik_penghasilan_ibu')}}">
        <i class="material-icons">layers</i>
        <span>Data Statistik Penghasilan Ibu</span>
    </a>
</li>
<li>
    <a href="{{url('/data_status_tambahan')}}">
        <i class="material-icons">layers</i>
        <span>Data Status Tambahan</span>
    </a>
</li>
<li>
    <a href="{{url('/ranking_akumulasi')}}">
        <i class="material-icons">layers</i>
        <span>Ranking Akumulasi</span>
    </a>
</li>
<li>
    <a href="{{url('/ranking_semester')}}">
        <i class="material-icons">layers</i>
        <span>Ranking Semester</span>
    </a>
</li>
    </ul>
</li>
@endif
   @if(auth()->user()->role == 'superadmin' or auth()->user()->role == 'kajur' or auth()->user()->role == 'koorprodi')
<li>
    <a href="javascript:void(0);" class="menu-toggle">
      <i class="material-icons">dashboard</i>
      <span>Data Hasil</span>
    </a>
  <ul class="ml-menu">
    @foreach($listprodi as $list)
      <li>
          <a href="javascript:void(0);" class="menu-toggle">
              <i class="material-icons">layers</i>
              <span>{{$list->nama_prodi}}</span>
          </a>
          <ul class="ml-menu">
              @foreach($tahun as $t)
              <li>
                  <a href="{{url('/coba/'.$list->kode_prodi.'/'.$t->kode_tahun_akademik)}}">
                      <span>{{$t->tahun_akademik}}</span>
                  </a>
              </li>
              @endforeach
          </ul>
      </li>
    @endforeach
  </ul>
</li>

@endif
@endsection
@section('content')
<div class="container-fluid">
  <!-- Widgets -->
  <div class="row clearfix">
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="card">
          <div class="header">
          <div class="block-header">
              <h2>Dashboard</h2>
          </div>

            <div class="card-body">
                <div class="row text-center mb-4">
                  <div class="col-lg-12">
            <div class="box">
              <div class="box-header">
        <h1><center><b>Aplikasi SNMPTN & SBMPTN ITK </b></center></h1>
        <div class="row">
          <div class="col-lg-12">
            <a href="{{url('/snmptn')}}"><img src="{{asset('ss.png')}}" class="mt-5" width="250" height="250" /></a>
          </div>
        </div>
              </div><!-- /.box-header -->
              <div class="box-body">
                  <center><h1>Created by: Dimas Saputra - 10171018 & Sadriansyah - 10171069</h1></center>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </div><!-- /.col -->
                </div>
                <div>

                </div>
            </div>

</div>
@endsection
