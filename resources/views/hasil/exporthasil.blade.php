<?php
header("Content-type: application/vnd-ms-excel");

header("Content-Disposition: attachment; filename=$prodi Finalhasil.xls");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
      <thead>
        <th>Kode Proram Studi</th>
        <th>Nomor Pendaftaran</th>
      </thead>
      <tbody>
        @foreach($data as $d)
        <tr>
          <td>{{$d->kode_program_studi}}</td>
          <td>{{$d->nomor_pendaftaran}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>
