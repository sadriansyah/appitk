@extends('template/master')
@section('content')
<div class="container-fluid">
  <!-- Radio -->
  <div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="card">
              <div class="header">
                  <h2>
                      Pilih Opsi

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
                  <h2 class="card-inside-title">
                      Silahkan pilih opsi dibawah
                  </h2>
                  <div class="demo-radio-button">
                    <form action="{{url('/filterjurusan')}}" method="post">
                      @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <p>Pilih Jurusan</p>
                        <input name="program_studi" type="radio" id="jurusan" class="radio-col-cyan col-12" value=" %" />
                        <label for="jurusan">Semua Jurusan</label>
                        @foreach($jurusan as $jur)
                        <input name="program_studi" type="radio" id="jurusan{{$jur->kode_program_studi}}" class="radio-col-cyan col-12"  value="{{$jur->program_studi}}" />
                        <label for="jurusan{{$jur->kode_program_studi}}">{{$jur->program_studi}}</label>
                        @endforeach
                      </div>
                      <div class="col-md-2">
                        <p>Pilih Urutan PTN</p>
                        <input name="urutan_ptn" type="radio" id="ptn1" class="radio-col-red col-12" value="1" checked />
                        <label for="ptn1">1</label>
                        <input name="urutan_ptn" type="radio" id="ptn2" class="radio-col-red col-12" value="2" >
                        <label for="ptn2">2</label>
                      </div>
                      <div class="col-md-2">
                        <p>Pilih Urutan Program Studi</p>
                        <input name="urutan_program_studi" type="radio" id="urutan1" class="radio-col-red col-12" checked value="1" />
                        <label for="urutan1">1</label>
                        <input name="urutan_program_studi" type="radio" id="urutan2" class="radio-col-red col-12" value="2" >
                        <label for="urutan2">2</label>
                      </div>
                      <div class="col-md-2">
                        <p>Pilih Tahun akademik</p>
                        @foreach($tahun as $tahun)
                        <input name="tahun_akademik" type="radio" id="tahun{{$tahun->kode_tahun_akademik}}" class="radio-col-red col-12" value="{{$tahun->kode_tahun_akademik}}" checked />
                        <label for="tahun{{$tahun->kode_tahun_akademik}}">{{$tahun->tahun_akademik}}</label>
                        @endforeach
                      </div>

                    </div>

                  </div>

                  <button class="btn btn-info btn-block" type="submit">
                      Lihat
                  </button>
                </form>
              </div>
          </div>
      </div>
  </div>
  <!-- #END# Radio -->


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
