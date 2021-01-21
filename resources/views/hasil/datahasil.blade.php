@extends('template.master')
@section('prodi')
   @if(auth()->user()->role == 'superadmin')
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
              @foreach($tahun_sidebar as $t)
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
   @if(auth()->user()->role == 'superadmin')
<li>
  <a href="{{url('/datareset')}}">
      <i class="material-icons">layers</i>
      <span>Reset Data</span>
    </a>
</li>
@endif
@endsection
@section('content')
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">

          <div class="body">
            <div class="container"><b>
              <p>Program Studi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{$pstudi}}</p>
              <p>Tahun Akademik &nbsp;&nbsp;: {{$tahun}}</p></b>
            </div>
          </div>
      </div>
  </div>

  <div class="col-md-7">
    <div class="table table-bordered">
      <table class="table  js-basic-example dataTable"  >
        <th >No</th>
        <th >Opsi</th>
        <th >Nama</th>
        <th >Nomor Pendaftaran</th>
        <th >Total Nilai</th>
        <th >pilihan prodi</th>
        <th >pilihan ptn</th>
        <th>Status</th>

      <tbody>
        @foreach($data as $d)
            <tr>
              <td>{{$loop->iteration}}</td>
                <th>

                  <input type="checkbox"  id="checksiswa{{$d['nomor_pendaftaran']}}" name="siswacheck" value="{{$d['nomor_pendaftaran']}}" onchange="ambilsiswa({{$d['nomor_pendaftaran']}},{{$d['kode_program_studi']}},{{$tahun}})"  class="filled-in"

                  @foreach($siswafinal as $s){
                    @if($s->nomor_pendaftaran == $d['nomor_pendaftaran'] AND $s->kode_program_studi == $d['kode_program_studi'])
                    checked
                    @elseif($s->nomor_pendaftaran == $d['nomor_pendaftaran'] AND $s->kode_program_studi != $d['kode_program_studi'])
                    disabled
                    @endif
                  @endforeach
                  }
                  />
                <label for="checksiswa{{$d['nomor_pendaftaran']}}"></label>

                </th>
                <td>{{$d['nama_siswa']}}</td>
                <td>{{$d['nomor_pendaftaran']}}</td>
                <td><?php echo number_format($d['total'],2,'.','');  ?></td>
                <td>{{$d['urutan_program_studi']}}</td>
                <td>{{$d['urutan_ptn']}}</td>
                <td>
                  @foreach($siswafinal as $c)
                    @foreach($prodiditerima as $pr)
                    @if($c->nomor_pendaftaran == $d['nomor_pendaftaran'])
                      @if($c->kode_program_studi == $pr->kode_prodi)
                      <span class="text-success">Diterima di {{$pr->nama_prodi}}</span>
                      @endif
                    @endif
                    @endforeach
                  @endforeach
                </td>

            </tr>
        @endforeach
      </tbody>
    </table>
    </div>
  </div>
  <div class="col-md-5">
    <div class="table table-bordered">
      <table class="table">
        <tr>
          <th colspan="2">Kuota Prodi/Jumlah Pendaftar</th>
          <th> {{$kuotaprodi}}/<b id="pendaftar"></b></th>
        </tr>
        <tr>
        <th>Nama</th>
        <th>Nomor Pendaftaran</th>
        <th>prodi diterima</th>
        <tr>
          <tbody id="list">

          </tbody>
    </table>
    </div>
    <div class="col-12" style="text-align:right">
      <a href="{{url('/finalexport/'.$program_studi.'/'.$tahun)}}" class="btn btn-info align-right" name="button">Simpan Data Final</a>
    </div>
  </div>
</div>

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#datatable').DataTable({
        });
    });
</script>
@endpush

@section('jsscript')
<script type="text/javascript">
  tampilhasil();

  function ambilsiswa(siswa, kode, tahun){
    var nama = "checksiswa"+siswa;
    var cek = document.getElementById(nama);
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    if(cek.checked){
      $.post("/simpansiswa",
      {
        nomor_pendaftaran : siswa,
        kode_program_studi : kode,
        tahun : tahun,
        _token : CSRF_TOKEN
      },
      function(data,status){
        tampilhasil();
      });
    }else {
      $.post("/deletesiswa",
      {
        nomor_pendaftaran : siswa,
        kode_program_studi : kode,
        tahun : tahun,
        _token : CSRF_TOKEN
      },
      function(data,status){
        tampilhasil();
      });
    }

  }

  function tampilkuota(){
    $.ajax({
      type : "GET",
      url : "/ambilkuotaprodi/{{$program_studi}}/{{$tahun}}",
      dataType: "html",
      success : function(response){
        $("#pendaftar").html(response);
      }
    });
  }

  function tampilhasil(){
    tampilkuota();
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $.get("/tampilsiswa/{{$program_studi}}/{{$tahun}}",
    {
      _token : CSRF_TOKEN
    },
    function(data,status){
      $("#list").html(data);
    });
  }
</script>

@endsection
