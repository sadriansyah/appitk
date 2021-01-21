@extends('template/master_dashboard')
@section('content')
<div class="container-fluid">
  <!-- Widgets -->
  <div class="row clearfix">
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="card">
          <div class="header">
          <div class="block-header">
              <h2>Modul Tahun Akademik</h2>
          </div>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary float-right mt-2" data-toggle="modal" data-target="#exampleModal4">
              Tambah Data Tahun Akademik
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
                  <table class="table table-bordered table-striped table-hover" id="datatable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode Tahun Akademik</th>
                            <th>Tahun Akademik</th>

                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($akademik as $m)
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
                                                <div class="custom-title">Form Edit Modul Tahun Akademik</div>
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
                                      {{ Form::model($m,['url' => 'tahun_akademik/'.$m->kode_tahun_akademik, 'method' => 'PUT']) }}
                                      <div class="form-group">
                                          <label for="recipient-name" class="col-form-label">Kode Tahun Akademik</label>
                                          {{Form::text('kode_tahun_akademik',null,['class' => 'form-control','placeholder' => 'Kode Tahun Akademik', 'readonly']) }}
                                      </div>
                                      <div class="form-group">
                                          <label for="message-text" class="col-form-label">Tahun Akademik</label>
                                          {{Form::text('tahun_akademik',null,['class' => 'form-control','placeholder' => 'Tahun Akademik']) }}
                                      </div>
                                      <div class="form-group">
                                          <label for="message-text" class="col-form-label">Status</label>
                                          {{Form::select('status',['Aktif' => 'Aktif', 'Tidak Aktif' => 'Tidak Aktif'],null,['class' => 'form-control']) }}
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

                          <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#konfirmasihapus{{$m->kode_tahun_akademik}}">Hapus</button>
                          <!-- Modal -->
                          <div class="modal fade" id="konfirmasihapus{{$m->kode_tahun_akademik}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Data Tahun akademik</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                      {{ Form::open(['url' => 'tahun_akademik/'. $m->kode_tahun_akademik, 'method' => 'delete']) }}
                                      <div class="modal-body">
                                          Apakah anda yakin ingin menghapus Modul Tahun Akademik tersebut?
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                          <button type="submit" class="btn btn-primary">Yakin</button>
                                      </div>
                                        {{ Form::close()}}
                                  </div>
                              </div>
                          </div>
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
                      <div class="custom-title">Form Tambah Data Tahun Akademik</div>
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
            {{ Form::open(['url' => 'tahun_akademik']) }}
              <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Kode Tahun Akademik</label>
                  {{Form::number('kode_tahun_akademik',null,['class' => 'form-control','placeholder' => 'Kode Tahun Akademik']) }}
              </div>
              <div class="form-group">
                  <label for="message-text" class="col-form-label">Tahun Akademik</label>
                  {{Form::text('tahun_akademik',null,['class' => 'form-control','placeholder' => 'Tahun Akademik']) }}
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
