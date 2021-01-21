@extends('template/master_dashboard')
@section('content')
<div class="container-fluid">
  <!-- Widgets -->
  <div class="row clearfix">
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="card">
          <div class="header">
          <div class="block-header">
              <h2>Kriteria dan Bobot SNMPTN ITK</h2>
          </div>

          <div class="row">

            <div class="col-md-6">
              <button type="button" class="btn btn-primary float-right mt-2" data-toggle="modal" data-target="#exampleModal4">
                  Tambah Data Kriteria
              </button>
            </div>
          </div>



          <div class="modal fade in" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4" aria-hidden="true" >
              <div class="modal-dialog" role="document" >
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel5">
                            <div class="custom-title-wrap bar-warning">
                                <div class="custom-title">Tambahkan Kode Tahun Akademik untuk menambahkan kriteria nilai</div>
                            </div>
                          </h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>

                      <div class="modal-body">
                      <form class="" action="{{url('/tambahtahunkriteria')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Tahun</label>
                            <div class="form-group">
                              <select class="form-control" name="tahun_akademik">
                                      <option value="">-- Pilih Tahun --</option>
                                      @foreach($tambahtahun as $thn)
                                        <option value="{{$thn->kode_tahun_akademik}}">{{$thn->tahun_akademik}}</option>
                                      @endforeach
                                </select>
                            </div>

                        </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          <button class="btn btn-primary" type="submit" name="submit">Simpan Data</button>
                      </div>
                      </form>
                  </div>
              </div>
          </div>



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
                            <th>Kriteria</th>
                            <th>Bobot (%)</th>
                            <th>Tahun</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($bobot as $m)
                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>@if($m->kriteria=='X1')
                            Nilai Rata-Rata Rapor B.Indonesia (X1)
                            @elseif($m->kriteria=='X2')
                            Nilai Rapor B.Inggris (X2)
                            @elseif($m->kriteria=='X3')
                            Nilai Rapor Matematika (X3)
                            @elseif($m->kriteria=='X6')
                            Prestasi Akademik lainnya siswa (X6)
                            @elseif($m->kriteria=='X9')
                            Nilai SBMPTN Saintek 3 Tahun terakhir (X9)
                            @elseif($m->kriteria=='X11')
                            Ranking * Akreditasi (X11)
                            @endif
                        </td>
                        <td>{{$m->bobot}}</td>
                        <td>{{$m->tahun_akademik}}</td>
                        <td>
                          <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#updateBobot{{$m->id}}" data-whatever="@mdo">Edit</button>
                          <!-- Modal -->
                          <div class="modal fade" id="updateBobot{{$m->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel5" aria-hidden="false">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel5">
                                            <div class="custom-title-wrap bar-warning">
                                                <div class="custom-title">Form Edit Bobot Kriteria</div>
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
                                      <form action="{{url('/editKriteria/'.$m->id)}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Kriteria</label>
                                            <input type="text" name="kriteria" class = "form-control" value="{{$m->kriteria}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Bobot Penilaian (%)</label>
                                            <input type="number" name="bobot" class = "form-control" value="{{$m->bobot}}">
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                          <button type="submit"class="btn btn-primary">Simpan Data</button>
                                      </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                          <a href="{{url('/hapusBobot/'.$m->id)}}" class="btn btn-sm btn-danger">Hapus</a>
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
