@extends('layout.master')
@section('content')

<div class="card card-info">
<div class="card-header">
<h3 class="card-title">Tambah Data Barang</h3>
</div>

<form method="POST" action="/detail/store">
	 @csrf
<div class="card-body">

<div class="form-group">
	<label for="">Id Transaksi</label>
	<input type="text" name="id_transaksi" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Id Barang</label>
	<input type="text" name="id_barang" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Jenis</label>
	<input type="text" name="transaksi_jenis" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Harga</label>
	<input type="text" name="transaksi_harga" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Jumlah</label>
	<input type="text" name="transaksi_jumlah" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Status</label>
	<input type="text" name="transaksi_detail_status" class="form-control" id="" placeholder="">
</div>
<div class="card-footer">
<input type="submit" class="btn btn-success" value="Simpan"></input>
</div>
</form>
</div>
</div>

@endsection