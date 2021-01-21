@extends('template/master_dashboard')

@section('content')
<div class="card-body">
  @if(session('status'))
  <div class="alert alert-success" role="alert">
        {{session('status')}}
  </div>
  @endif
</div>
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
          <div class="col-lg-6">
            <a href="{{url('/snmptn')}}"><img src="{{asset('ss.png')}}" class="mt-5" width="250" height="250" /></a>
          </div>
             @if(auth()->user()->role == 'superadmin' or auth()->user()->role == 'admin_data')
          <div class="col-lg-6">
            <a href="{{url('/sbmptn')}}"><img src="{{asset('sbmptn.png')}}" class="mt-5" width="250" height="230" /></a>
          </div>
            @endif
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
