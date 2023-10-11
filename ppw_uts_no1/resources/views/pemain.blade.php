@extends('master')

@section('title')
    Daftar Pemain
@endsection

@section('content')
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Pemain</th>
      <th scope="col">No Punggung</th>
      <th scope="col">Posisi</th>
    </tr>
  </thead>
  <tbody>
  @foreach($table as $pemain)
    <tr>
      <td>{{ ++$no }}</td>
      <td>{{ $pemain->nama_pemain }}</td>
      <td>{{ $pemain->no_punggung}}</td>
      <td>{{ $pemain->posisi}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
