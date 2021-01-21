@extends('template/master_dashboard')
@section('content')
<div class="container-fluid">
  <!-- Widgets -->
  <div class="row clearfix">
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="card">
          <div class="header">
          <div class="block-header">
              <h2>Data Jurusan di ITK</h2>
          </div>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary float-right mt-2" data-toggle="modal" data-target="#exampleModal4">
              Tambah Data Jurusan
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
                            <th>Kode Jurusan</th>
                            <th>Nama Jurusan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($jurusan as $m)
                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$m->kode_jurusan}}</td>
                        <td>{{$m->nama_jurusan}}</td>
                        <td>
                          <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#updateJurusan{{$m->kode_jurusan}}" data-whatever="@mdo">Edit</button>
                          <!-- Modal -->
                          <div class="modal fade" id="updateJurusan{{$m->kode_jurusan}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel5" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel5">
                                            <div class="custom-title-wrap bar-warning">
                                                <div class="custom-title">Form Edit Data Data Jurusan</div>
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
                                      {{ Form::model($m,['url' => 'jurusan/'.$m->kode_jurusan, 'method' => 'PUT']) }}
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Kode Jurusan</label>
                                            {{Form::text('kode_jurusan',null,['class' => 'form-control','placeholder' => 'Kode Jurusan']) }}
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Nama Jurusan</label>
                                            {{Form::text('nama_jurusan',null,['class' => 'form-control','placeholder' => 'Nama Jurusan']) }}
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

                          <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#konfirmasihapus{{$m->kode_jurusan}}">Hapus</button>
                          <!-- Modal -->
                          <div class="modal fade" id="konfirmasihapus{{$m->kode_jurusan}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Data Jurusan</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                      {{ Form::open(['url' => 'jurusan/'. $m->kode_jurusan, 'method' => 'delete']) }}
                                      <div class="modal-body">
                                          Apakah anda yakin ingin menghapus Data Jurusan tersebut?
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
                      <div class="custom-title">Form Tambah Data Jurusan ITK</div>
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
            {{ Form::open(['url' => 'jurusan']) }}
              <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Kode Jurusan</label>
                  {{Form::text('kode_jurusan',null,['class' => 'form-control','placeholder' => 'Kode Jurusan']) }}

              </div>
              <div class="form-group">
                  <label for="message-text" class="col-form-label">Nama Jurusan</label>
                  {{Form::text('nama_jurusan',null,['class' => 'form-control','placeholder' => 'Nama Jurusan']) }}
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
@push('scripts')
<script>
    $(document).ready(function() {
        $('#datatable').DataTable({

        });
    });
</script>
@endpush
