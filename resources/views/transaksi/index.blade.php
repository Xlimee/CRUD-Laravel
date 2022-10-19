@extends('layout.master')

@section('content')
<div class="card-header">
    <h3 class="card-title">Data Transaksi</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <a href="/transaksi/create"><button class="btn btn-warning">+ Add Data</button></a>
    <hr>
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr >
        <th>Id Transaksi</th>
        <th>Id Admin</th>
        <th>Tanggal Transaksi</th>
        <th>No Nota</th>
        <th>Status</th>
        <th colspan="2">Aksi</th>
    </tr >
  </thead>
  <tbody>
    @foreach ($transaksi as $row)
    <tr >
        <td>{{ $row->id_transaksi }}</td>
        <td>{{ $row->id_admin }}</td>
        <td>{{ $row->transaksi_tanggal }}</td>
        <td>{{ $row->transaksi_nonota }}</td>
        <td>{{ $row->transaksi_status }}</td>
        <td>
            <a href="transaksi/edit/{{ $row->id }}"><button class="btn btn-primary">Edit </button></a> 
            <a href="transaksi/destroy/{{ $row->id }}"><button class="btn btn-danger">Delete </button></a> 
        </td>
    </tr>
    @endforeach
      </tbody>
    </table>
  </div> 
  @endsection