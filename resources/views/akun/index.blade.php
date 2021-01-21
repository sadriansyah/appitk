@extends('template/master_dashboard')
@section('content')
<div class="container-fluid">
  <!-- Widgets -->
  <div class="row clearfix">
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="card">
          <div class="header">
          <div class="block-header">
              <h2>Manajemen Users Sistem</h2>
          </div>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary float-right mt-2" data-toggle="modal" data-target="#exampleModal4">
              Tambah Data
          </button>
          <div class="card-body">
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
                          <th>Username</th>
                          <th>Nama</th>
                          <th>Role</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach($user as $p)
                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$p->username}}</td>
                        <td>{{$p->nama}}</td>
                        <td>{{$p->role}}</td>
                        <td>

                                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#konfirmasihapus{{$p->id}}">Hapus</button>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="konfirmasihapus{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Data Prodi</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                {{ Form::open(['url' => 'tambah_user/'. $p->id, 'method' => 'delete']) }}
                                                                <div class="modal-body">
                                                                    Apakah anda yakin ingin menghapus Data User tersebut?
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
                      <div class="custom-title">Form Tambah Data User</div>
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
              {{ Form::open(['url' => 'tambah_user']) }}
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Username</label>
                    {{Form::text('username',null,['class' => 'form-control','placeholder' => 'Username']) }}
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Nama Lengkap</label>
                    {{Form::text('nama',null,['class' => 'form-control','placeholder' => 'Nama Lengkap']) }}
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Role</label>
                    {{Form::select('role',['admin_data' => 'Admin Data', 'admin_ict' => 'Admin ICT', 'kajur' => 'Kepala Jurusan', 'koorprodi' => 'Koordinator Prodi'],null,['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Password</label>
                    {{Form::password('password',['class' => 'form-control','placeholder' => 'Password']) }}
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
