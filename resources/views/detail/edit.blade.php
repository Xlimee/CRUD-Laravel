@extends('layout.master')
@section('content')

<div class="card card-info">
<div class="card-header">
<h3 class="card-title">Edit Data Admin</h3>
</div>

<form method="POST" action="/detail/update/{{$detail->id}}">
	 @csrf
	 @method('put')
<div class="card-body">
<div class="form-group">
	<label for="">Id Transaksi Detail</label>
	<input type="text" value="{{$detail->id_transaksi_detail}}" name="id_transaksi_detail" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Id Transaksi</label>
	<input type="text" value="{{$detail->id_transaksi}}"name="id_transaksi" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Id Barang</label>
	<input type="text" value="{{$detail->id_barang}}" name="id_barang" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Jenis</label>
	<input type="text" value="{{$detail->transaksi_jenis}}" name="transaksi_jenis" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Harga</label>
	<input type="text" value="{{$detail->transaksi_harga}}"name="transaksi_harga" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Jumlah</label>
	<input type="text" value="{{$detail->transaksi_jumlah}}"name="transaksi_jumlah" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Status</label>
	<input type="text" value="{{$detail->transaksi_detail_status}}"name="transaksi_detail_status" class="form-control" id="" placeholder="">
</div>
<div class="card-footer">
<input type="submit" class="btn btn-success" value="Simpan"></input>
</div>
</form>
</div>
</div>
@endsection