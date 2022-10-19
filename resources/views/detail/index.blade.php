@extends('layout.master')

@section('content')
<div class="card-header">
    <h3 class="card-title">Transaksi Detail</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <a href="/detail/create"><button class="btn btn-warning">+ Add Data</button></a>
    <hr>
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr >
        <th>Id Transaksi Detail</th>
        <th>Id Transaksi</th>
        <th>Id Barang</th>
        <th>Jenis</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr >
</thead>
<tbody>
    @foreach ($detail as $row)
    <tr >
        <td>{{ $row->id_transaksi_detail }}</td>
        <td>{{ $row->id_transaksi }}</td>
        <td>{{ $row->id_barang }}</td>
        <td>{{ $row->transaksi_jenis }}</td>
        <td>{{ $row->transaksi_harga }}</td>
        <td>{{ $row->transaksi_jumlah }}</td>
        <td>{{ $row->transaksi_detail_status }}</td>
        <td>    
            <a href="detail/edit/{{ $row->id }}"><button class="btn btn-primary">Edit </button></a> 
            <a href="detail/destroy/{{ $row->id }}"><button class="btn btn-danger">Delete </button></a> 
        </td>
    </tr>
    @endforeach
      </tbody>
    </table>
  </div> 
  @endsection