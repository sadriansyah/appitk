@extends('template/master')
@section('content')
<div class="container-fluid">
    <!-- Widgets -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                                <div class="block-header">
                                    <h2>Hasil Scoring</h2>
                                </div>
                        </div>
                        <div class="body table-responsive">
                          <div class="container"><b>

                            <?php
                            $actual_link = "$_SERVER[REQUEST_URI]";


                             ?>

                          </div>
                          <br><br>
                          <div class="row">
                            <div class="col-md-12">


                            <table class="table table-bordered table-striped table-hover" id="datatable">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nomor Pendaftaran</th>
                                        <th>Nama Siswa</th>
                                        <th>Program Studi</th>
                                        <th>Total Nilai</th>
                                        <th>urutan_ptn</th>
                                        <th>urutan program_studi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $d)
                                    <tr>
                                        <th>
                                          <input type="checkbox" id="checksiswa{{$d['nomor_pendaftaran']}}" name="siswacheck"

                                          />
                                        <label for="checksiswa{{$d['nomor_pendaftaran']}}"></label></th>
                                        <td>{{$d['nomor_pendaftaran']}}</td>
                                        <td>{{$d['nama_siswa']}}</td>
                                        <td>{{$d['program_studi']}}</td>
                                        <td>{{$d['total']}} </td>
                                        <td>{{$d['urutan_ptn']}}</td>
                                        <td>{{$d['urutan_program_studi']}}</td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                          </div>


                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->

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
