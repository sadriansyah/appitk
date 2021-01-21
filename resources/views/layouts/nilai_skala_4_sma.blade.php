@extends('template/master')
@section('prodi')
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

@endsection

@section('content')
<div class="container-fluid">
    <!-- Widgets -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                                <div class="block-header">
                                    <h2>Data Nilai Mapel UN Skala 4 SMA</h2>
                                </div>
                        <form action="{{url('/data_nilai_skala_4_sma')}}" method="get">
                          @csrf
                        <table class="table table-bordered table-striped table-hover">
                          <tr>
                            <td>Tahun Akademik</td>
                            <td>{{ Form::select('tahun_akademik',$tahun_akademik,$tahun_akademik_pilihan,['class' => 'form-control show-tick']) }}</td>
                            <tr>
                          <tr>
                            <td></td>
                            <td>
                              <button type="submit" class="btn btn-primary">Tampilkan</button>
                              <!-- Button trigger modal -->
                            </td>
                          </tr>
                        </table>
                        </form>
                <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success float-right mt-2 mb-2" data-toggle="modal" data-target="#exampleModal4">
                            Import Data
                        </button>
                        <div class="card-body">
                          @if(session('sukses'))
                          <div class="alert alert-success" role="alert">
                                {{session('sukses')}}
                          </div>
                          @endif
                        </div>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nomor Pendaftaran</th>
                                        <th>Nama Jurusan</th>
                                        <th>1-IND</th>
                                        <th>1-ING</th>
                                        <th>1-MAT</th>
                                        <th>1-BIO</th>
                                        <th>1-FIS</th>
                                        <th>1-KIM</th>
                                        <th>1-EKO</th>
                                        <th>1-GEO</th>
                                        <th>1-SOS</th>
                                        <th>1-BAS</th>
                                        <th>1-SBA</th>
                                        <th>1-SID</th>
                                        <th>2-IND</th>
                                        <th>2-ING</th>
                                        <th>2-MAT</th>
                                        <th>2-BIO</th>
                                        <th>2-FIS</th>
                                        <th>2-KIM</th>
                                        <th>2-EKO</th>
                                        <th>2-GEO</th>
                                        <th>2-SOS</th>
                                        <th>2-BAS</th>
                                        <th>2-SBA</th>
                                        <th>2-SID</th>
                                        <th>3-IND</th>
                                        <th>3-ING</th>
                                        <th>3-MAT</th>
                                        <th>3-BIO</th>
                                        <th>3-FIS</th>
                                        <th>3-KIM</th>
                                        <th>3-EKO</th>
                                        <th>3-GEO</th>
                                        <th>3-SOS</th>
                                        <th>3-BAS</th>
                                        <th>3-SBA</th>
                                        <th>3-SID</th>
                                        <th>4-IND</th>
                                        <th>4-ING</th>
                                        <th>4-MAT</th>
                                        <th>4-BIO</th>
                                        <th>4-FIS</th>
                                        <th>4-KIM</th>
                                        <th>4-EKO</th>
                                        <th>4-GEO</th>
                                        <th>4-SOS</th>
                                        <th>4-BAS</th>
                                        <th>4-SBA</th>
                                        <th>4-SID</th>
                                        <th>5-IND</th>
                                        <th>5-ING</th>
                                        <th>5-MAT</th>
                                        <th>5-BIO</th>
                                        <th>5-FIS</th>
                                        <th>5-KIM</th>
                                        <th>5-EKO</th>
                                        <th>5-GEO</th>
                                        <th>5-SOS</th>
                                        <th>5-BAS</th>
                                        <th>5-SBA</th>
                                        <th>5-SID</th>
                                        <th>6-IND</th>
                                        <th>6-ING</th>
                                        <th>6-MAT</th>
                                        <th>6-BIO</th>
                                        <th>6-FIS</th>
                                        <th>6-KIM</th>
                                        <th>6-EKO</th>
                                        <th>6-GEO</th>
                                        <th>6-SOS</th>
                                        <th>6-BAS</th>
                                        <th>6-SBA</th>
                                        <th>6-SID</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    ?>
                                @foreach($nilai as $d)
                                    <tr>
                                        <th>{{$i}}</th>
                                        <td>{{$d->nomor_pendaftaran}}</td>
                                        <td>{{$d->nama_jurusan}}</td>
                                        <td>{{$d->IND1}}</td>
                                        <td>{{$d->ING1}}</td>
                                        <td>{{$d->MAT1}}</td>
                                        <td>{{$d->bio1}}</td>
                                        <td>{{$d->fis1}}</td>
                                        <td>{{$d->kim1}}</td>
                                        <td>{{$d->eko1}}</td>
                                        <td>{{$d->geo1}}</td>
                                        <td>{{$d->sos1}}</td>
                                        <td>{{$d->bas1}}</td>
                                        <td>{{$d->sba1}}</td>
                                        <td>{{$d->sid1}}</td>
                                        <td>{{$d->IND2}}</td>
                                        <td>{{$d->ING2}}</td>
                                        <td>{{$d->MAT2}}</td>
                                        <td>{{$d->bio2}}</td>
                                        <td>{{$d->fis2}}</td>
                                        <td>{{$d->kim2}}</td>
                                        <td>{{$d->eko2}}</td>
                                        <td>{{$d->geo2}}</td>
                                        <td>{{$d->sos2}}</td>
                                        <td>{{$d->bas2}}</td>
                                        <td>{{$d->sba2}}</td>
                                        <td>{{$d->sid2}}</td>
                                        <td>{{$d->IND3}}</td>
                                        <td>{{$d->ING3}}</td>
                                        <td>{{$d->MAT3}}</td>
                                        <td>{{$d->bio3}}</td>
                                        <td>{{$d->fis3}}</td>
                                        <td>{{$d->kim3}}</td>
                                        <td>{{$d->eko3}}</td>
                                        <td>{{$d->geo3}}</td>
                                        <td>{{$d->sos3}}</td>
                                        <td>{{$d->bas3}}</td>
                                        <td>{{$d->sba3}}</td>
                                        <td>{{$d->sid3}}</td>
                                        <td>{{$d->IND4}}</td>
                                        <td>{{$d->ING4}}</td>
                                        <td>{{$d->MAT4}}</td>
                                        <td>{{$d->bio4}}</td>
                                        <td>{{$d->fis4}}</td>
                                        <td>{{$d->kim4}}</td>
                                        <td>{{$d->eko4}}</td>
                                        <td>{{$d->geo4}}</td>
                                        <td>{{$d->sos4}}</td>
                                        <td>{{$d->bas4}}</td>
                                        <td>{{$d->sba4}}</td>
                                        <td>{{$d->sid4}}</td>
                                        <td>{{$d->IND5}}</td>
                                        <td>{{$d->ING5}}</td>
                                        <td>{{$d->MAT5}}</td>
                                        <td>{{$d->bio5}}</td>
                                        <td>{{$d->fis5}}</td>
                                        <td>{{$d->kim5}}</td>
                                        <td>{{$d->eko5}}</td>
                                        <td>{{$d->geo5}}</td>
                                        <td>{{$d->sos5}}</td>
                                        <td>{{$d->bas5}}</td>
                                        <td>{{$d->sba5}}</td>
                                        <td>{{$d->sid5}}</td>
                                        <td>{{$d->IND6}}</td>
                                        <td>{{$d->ING6}}</td>
                                        <td>{{$d->MAT6}}</td>
                                        <td>{{$d->bio6}}</td>
                                        <td>{{$d->fis6}}</td>
                                        <td>{{$d->kim6}}</td>
                                        <td>{{$d->eko6}}</td>
                                        <td>{{$d->geo6}}</td>
                                        <td>{{$d->sos6}}</td>
                                        <td>{{$d->bas6}}</td>
                                        <td>{{$d->sba6}}</td>
                                        <td>{{$d->sid6}}</td>
                                    </tr>
                                    <?php
                                    $i++
                                    ?>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->

</div>
@endsection
<!-- Modal -->
<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel5" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel5">
                  <div class="custom-title-wrap bar-warning">
                      <div class="custom-title">Form Import Data Nilai Mapel UN SMA Skala 4</div>
                  </div>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="modal-body">
              <form action="{{url('/importNilaiSkala4SMA')}}" method="post" enctype="multipart/form-data">
                  @csrf
              <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Tahun</label>
                {{Form::select('kode_tahun_akademik',$tahun_akademik,null,['class' => 'form-control show-tick']) }}
              </div>
              <div class="form-group">
                  <label for="message-text" class="col-form-label">Import File (.csv)</label>
                  <input type="file" class="form-control" name="file" required>

              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                {{Form::submit('Simpan Data',['class' => 'btn btn-primary']) }}
            </div>
            </form>
        </div>
    </div>
</div>
