@extends('template/master')
@section('sbmptn')
<li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">swap_calls</i>
                        <span>SBMPTN</span>
                    </a>
                    <ul class="ml-menu">
                  <li>
                    <a href="{{url('/terima_ptn')}}">
                        <i class="material-icons">text_fields</i>
                        <span>Terima Per PTN</span>
                    </a>
                </li>
                <li>
                  <a href="{{url('/sebaran_provinsi')}}">
                      <i class="material-icons">text_fields</i>
                      <span>Sebaran Provinsi</span>
                  </a>
              </li>
              <li>
                <a href="{{url('/rataan_prodi')}}">
                    <i class="material-icons">text_fields</i>
                    <span>Rataan Per Prodi</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <span>PTN Nilai Terima</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="{{url('/terima_saintek')}}">
                            <span>SAINTEK</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/terima_soshum')}}">
                            <span>SOSHUM</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                  <a href="javascript:void(0);" class="menu-toggle">
                      <span>Biodata</span>
                  </a>
                  <ul class="ml-menu">
                      <li>
                          <a href="{{url('/biodata_terima')}}">
                              <span>Biodata Terima</span>
                          </a>
                      </li>
                      <li>
                          <a href="{{url('/biodata_bidikmisi')}}">
                              <span>Biodata Bidikmisi</span>
                          </a>
                      </li>
                      <li>
                          <a href="javascript:void(0);">
                              <span>Biodata Peminat</span>
                          </a>
                      </li>
                  </ul>
                </li>

              <li>
                  <a href="javascript:void(0);" class="menu-toggle">
                      <span>Keketatan</span>
                  </a>
                  <ul class="ml-menu">
                      <li>
                          <a href="{{url('/keketatan_prodi')}}">
                              <span>PRODI</span>
                          </a>
                      </li>
                      <li>
                          <a href="{{url('/keketatan_saintek')}}">
                              <span>SAINTEK</span>
                          </a>
                      </li>
                      <li>
                          <a href="{{url('/keketatan_soshum')}}">
                              <span>SOSHUM</span>
                          </a>
                      </li>
                  </ul>
                </li>
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
                        <h2>Data Rataan Per Prodi</h2>
                    </div>
                    <form action="{{url('/rataan_prodi')}}" method="get">
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
                                        <th>Kode Prodi</th>
                                        <th>Nama Prodi</th>
                                        <th>Rataan</th>
                                        <th>S.Baku</th>
                                        <th>CoV</th>
                                        <th>Min</th>
                                        <th>Max</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    ?>
                                @foreach($rataan as $d)
                                    <tr>
                                        <th>{{$i}}</th>
                                        <td>{{$d->kode_prodi}}</td>
                                        <td>{{$d->nama_prodi}}</td>
                                        <td>{{$d->rataan}}</td>
                                        <td>{{$d->s_baku}}</td>
                                        <td>{{$d->cov}}</td>
                                        <td>{{$d->min}}</td>
                                        <td>{{$d->max}}</td>
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
                      <div class="custom-title">Form Import Data Rataan Per Prodi</div>
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
              <form action="{{url('/importRataanProdi')}}" method="post" enctype="multipart/form-data">
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
