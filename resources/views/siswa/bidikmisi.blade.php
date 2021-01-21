@extends('template/master')
@section('content')
<div class="container-fluid">
            
            <!-- Widgets -->
            <div class="row clearfix">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                    <div class="header">
                    <div class="block-header">
                        <h2>Data Siswa Bidikmisi</h2>
                    </div>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nomor Pendaftaran</th>
                                        <th>Nama Siswa</th>
                                        <th>Bidikmisi</th>
                                    </tr>
                                </thead>
                                <tbody>
                    
                                <tr>
                                <th>1</th>
                                <th>{{$data}}</th>
                                <th>da</th>
                                <th>da</th>
                                </tr>
                           
                                </tbody>
                            </table>
                       
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
        
</div>
@endsection
