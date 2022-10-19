@extends('layout.master')

@section('content')
<div class="card-header">
    <h3 class="card-title">Data Jenis</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <a href="/jenis/create"><button class="btn btn-warning">+ Add Data</button></a>
    <hr>
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr >
        <th>Id Jenis</th>
        <th>Nama Jenis</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr >
  </thead>
  <tbody>
    @foreach ($jenis as $row)
    <tr >
        <td>{{ $row->id_jenis }}</td>
        <td>{{ $row->jenis_nama }}</td>
        <td>{{ $row->jenis_status }}</td>
        <td>
            <a href="jenis/edit/{{ $row->id }}"><button class="btn btn-primary">Edit </button></a> 
            <a href="jenis/destroy/{{ $row->id }}"><button class="btn btn-danger">Delete </button></a> 
        </td>
    </tr>
    @endforeach
      </tbody>
    </table>
  </div> 
  @endsection