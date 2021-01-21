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
                        <h2>SBMPTN</h2>
                    </div>
                    <form action="{{url('/sbmptn')}}" method="get">
                      @csrf
                    <table class="table table-bordered table-striped table-hover">
                      <tr>
                        <td>Tahun</td>
                        <td>{{ Form::select('tahun_akademik',$tahun_akademik,$tahun_akademik_pilihan,['class' => 'form-control show-tick']) }}</td>
                      </tr>
                      <tr>
                        <td>Kategori</td>
                        <td>
                          {{ Form::select('kategori',$kategori,$kategori_pilihan,['class' => 'form-control show-tick']) }}
                        </td>

                        </td>

                      </tr>
                        <tr>
                      <tr>
                        <td>

                          <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#exampleModal4">
                          Unggah File
                          </button>

                      </td>
                        <td>
                          <button type="submit" class="btn btn-primary">Cari</button>
                          <!-- Button trigger modal -->
                        </td>
                      </tr>
                    </table>
                    </form>

                                <div class="card-body">
                                  @if(session('sukses'))
                                  <div class="alert alert-success" role="alert">
                                        {{session('sukses')}}
                                  </div>
                                  @endif
                                </div>
                                <!-- Custom Content -->



                                            <div class="header">
                                                <h2>
                                                    File SBMPTN
                                                    <small>With a bit of extra markup, it's possible to add any kind of HTML content like headings, paragraphs, or buttons into thumbnails.</small>
                                                </h2>
                                                <ul class="header-dropdown m-r--5">
                                                    <li class="dropdown">
                                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                            <i class="material-icons">more_vert</i>
                                                        </a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li><a href="javascript:void(0);">Action</a></li>
                                                            <li><a href="javascript:void(0);">Another action</a></li>
                                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="body">

                                                <div class="row">
                                                    @foreach($file as $m)
                                                    <div class="col-sm-6 col-md-3">
                                                        <div class="thumbnail">
                                                            <img src="{{asset('folder2.jpg')}}">
                                                            <div class="caption">
                                                                <h3>{{$m->nama_file}}</h3>

                                                                <p>

                                                                    <a href="{{asset('/Upload_SBMPTN/'.$m->nama_file)}}"class="btn bg-primary btn-circle waves-effect waves-circle waves-float"><i class="material-icons">file_download</i></a>
                                                                      <a href="{{url('/hapusFile/'.$m->id)}}"class="btn bg-red btn-circle waves-effect waves-circle waves-float" onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut?');"><i class="material-icons">delete</i></a>

                                                                    
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>



                                <!-- #END# Custom Content -->
                        </div>

                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->

</div>

@endsection

<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel5" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel5">
                  <div class="custom-title-wrap bar-warning">
                      <div class="custom-title">Form Upload Data SBMPTN</div>
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
            <form action="{{url('/uploadSBMPTN')}}" method="post" enctype="multipart/form-data">
            @csrf
              <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Tahun SBMPTN</label>
                {{Form::select('kode_tahun_akademik',$tahun_akademik,null,['class' => 'form-control']) }}
              </div>
              <div class="form-group">
                  <label for="message-text" class="col-form-label">Kategori</label>
                {{Form::select('kode_kategori',$kategori,null,['class' => 'form-control']) }}
              </div>
              <div class="form-group">
                  <label for="message-text" class="col-form-label">Import Data File SBMPTN</label>
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
