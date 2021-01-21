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
              <h2>Jenis Import File SBMPTN</h2>
          </div>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary float-right mt-2" data-toggle="modal" data-target="#exampleModal4">
              Tambah Data Jenis Import File SBMPTN
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
                            <th>Kode Kategori</th>
                            <th>Nama Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($kategori as $m)
                      <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$m->kode_kategori}}</td>
                      <td>{{$m->kategori}}</td>
                      <td>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#updateKategori{{$m->kode_kategori}}" data-whatever="@mdo">Edit</button>

                        <!-- Modal -->
                        <div class="modal fade" id="updateKategori{{$m->kode_kategori}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel5" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel5">
                                          <div class="custom-title-wrap bar-warning">
                                              <div class="custom-title">Form Edit Modul Kategori</div>
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
                                  <form action="{{url('/updateKategoriSBMPTN/'.$m->kode_kategori)}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Kode Kategori</label>
                                        <input type="text" name="kode_kategori" value="{{$m->kode_kategori}}" class="form-control" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Kategori</label>
                                          <input type="text" name="kategori" value="{{$m->kategori}}" class="form-control">
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

                        <a href="{{url('/hapusKategori/'.$m->kode_kategori)}}" class="btn btn-sm btn-danger">Hapus</a>

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
                      <div class="custom-title">Form Tambah Data Jenis Import File SBMPTN</div>
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
          <form action="{{'/tambahKategori'}}" method="post">
            @csrf
              <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Kode Kategori</label>
                  {{Form::text('kode_kategori',null,['class' => 'form-control','placeholder' => 'Ex: Kode Kategori']) }}
              </div>
              <div class="form-group">
                  <label for="message-text" class="col-form-label">Kategori</label>
                  {{Form::text('kategori',null,['class' => 'form-control','placeholder' => 'Ex: Kategori']) }}
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
