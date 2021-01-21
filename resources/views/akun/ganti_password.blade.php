@extends('template/master_dashboard')
@section('content')
<div class="container-fluid">
  <!-- Widgets -->
  <div class="row clearfix">
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="card">
          <div class="header">
          <div class="block-header">
              <h2>Edit My Profile</h2>
          </div>
          <!-- Button trigger modal -->

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
              <div class="card-body">
                @if(session('status'))
                <div class="alert alert-success" role="alert">
                      {{session('status')}}
                </div>
                @endif
              </div>
              <div class="row">

                @foreach($user as $p)
                                        <form class="form-horizontal" action="{{url('/postGantiPassword/'.$p->id)}}" method="post">
                                          @csrf
                                            <div class="form-group">
                                                <label for="OldPassword" class="col-sm-3 control-label">Username</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" name="username" value="{{$p->username}}" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NewPassword" class="col-sm-3 control-label">Nama</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control"  name="nama" value="{{$p->nama}}" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="NewPasswordConfirm" class="col-sm-3 control-label">New Password</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="password" class="form-control" name="password" placeholder="New Password (Confirm)" required="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <button type="submit" class="btn btn-danger">SUBMIT</button>
                                                </div>
                                            </div>
                                        </form>
                                        @endforeach

                </div>

              </div>
      </div>
  </div>
</div>

@endsection
