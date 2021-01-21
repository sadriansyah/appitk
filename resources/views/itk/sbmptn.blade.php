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
              <h2>Dashboard</h2>
          </div>

            <div class="card-body">
                <div class="row text-center mb-4">
                  <div class="col-lg-12">
            <div class="box">
              <div class="box-header">
        <h1><center><b>Aplikasi SNMPTN & SBMPTN ITK </b></center></h1>
        <div class="row">
          <div class="col-lg-12">
            <a href="{{url('/sbmptn')}}"><img src="{{asset('sbmptn.png')}}" class="mt-5" width="250" height="230" /></a>
          </div>
        </div>
              </div><!-- /.box-header -->
              <div class="box-body">
                  <center><h1>Created by: Dimas Saputra - 10171018 & Sadriansyah - 10171069</h1></center>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </div><!-- /.col -->
                </div>
                <div>

                </div>
            </div>

</div>
@endsection
