@extends('template/master')
@section('sbmptn')
<li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">swap_calls</i>
                        <span>Master Data SBMPTN</span>
                    </a>
                    <ul class="ml-menu">
                  <li>
                    <a href="{{url('/tahun_sbmptn')}}">
                        <i class="material-icons">text_fields</i>
                        <span>Tahun SBMPTN</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{url('/jenis_file_sbmptn')}}">
                        <i class="material-icons">text_fields</i>
                        <span>Kategori File SBMPTN</span>
                    </a>
                  </li>
                    </ul>
                    <a href="{{url('/sbmptn')}}">
                        <i class="material-icons">swap_calls</i>
                        <span>SBMPTN</span>
                    </a>
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
              <h2>Tahun SBMPTN</h2>
          </div>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary float-right mt-2" data-toggle="modal" data-target="#exampleModal4">
              Tambah Data Tahun SBMPTN
          </button>
          <div class="card-body mt-2">
            @if(session('status'))
            <div class="alert alert-success" role="alert">
                  {{session('status')}}
            </div>
            @endif
          </div>
              </div>
              <div class="body table-responsive">
                  <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode Tahun SBMPTN</th>
                            <th>Tahun SBMPTN</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($sbm as $m)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$m->kode_tahun_akademik}}</td>
                          <td>{{$m->tahun_akademik}}</td>
                          <td>
                            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#updatetahunakademik{{$m->kode_tahun_akademik}}" data-whatever="@mdo">Edit</button>

                            <!-- Modal -->
                            <div class="modal fade" id="updatetahunakademik{{$m->kode_tahun_akademik}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel5" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel5">
                                              <div class="custom-title-wrap bar-warning">
                                                  <div class="custom-title">Form Edit Modul Tahun SBMPTN</div>
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
                                      <form action="{{url('/updateTahunSBMPTN/'.$m->kode_tahun_akademik)}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Kode Tahun SBMPTN</label>
                                            <input type="text" name="kode_tahun_akademik" value="{{$m->kode_tahun_akademik}}" class="form-control" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Tahun SBMPTN</label>
                                              <input type="text" name="tahun_akademik" value="{{$m->tahun_akademik}}" class="form-control">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            {{Form::submit('Simpan Data',['class' => 'btn btn-primary']) }}
                                        </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                              </div>

                            <a href="{{url('/hapusSBMPTN/'.$m->kode_tahun_akademik)}}" class="btn btn-sm btn-danger">Hapus</a>

                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection
<!-- Modal -->
<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel5" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel5">
                  <div class="custom-title-wrap bar-warning">
                      <div class="custom-title">Form Tambah Data Tahun SBMPTN</div>
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
          <form action="{{'/tambahTahunSBMPTN'}}" method="post">
            @csrf
              <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Kode Tahun SBMPTN</label>
                  {{Form::number('kode_tahun_akademik',null,['class' => 'form-control','placeholder' => 'Ex: 20201']) }}
              </div>
              <div class="form-group">
                  <label for="message-text" class="col-form-label">Tahun SBMPTN</label>
                  {{Form::text('tahun_akademik',null,['class' => 'form-control','placeholder' => 'Ex: 2020']) }}
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
