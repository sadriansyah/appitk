@extends('template/master')
@section('content')
<div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

<form action="{{url('/importcsv')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file">
    <br>
    <button class="btn btn-success">Import CSV</button>
    <a href="{{url('/exportcsv')}}" class="btn btn-warning">Export csv</a>

</form>
            <!-- Widgets -->
            <div class="row clearfix">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                BASIC TABLES
                                <small>Basic example without any additional modification classes</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                      <th>No</th>
                                         <th>Chekbox</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $d)
                                    <tr>
                                      <td>{{$loop->iteration}}</td>
                                    <td>{{$d->username}}</td>
                                        <td>{{$d->nama}}</td>
                                        <td>{{$d->role}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->

</div>
@endsection
