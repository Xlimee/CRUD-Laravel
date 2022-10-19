@extends('layout.master')
@section('content')

<div class="card card-info">
<div class="card-header">
<h3 class="card-title">Tambah Data Barang</h3>
</div>

<form method="POST" action="/barang/store">
	 @csrf
<div class="card-body">

<div class="form-group">
	<label for="">Kode Barang</label>
	<input type="text" name="barang_kode" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Nama Barang</label>
	<input type="text" name="barang_nama" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Id Jenis</label>
	<input type="text" name="id_jenis" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Id Supplier</label>
	<input type="text" name="id_supplier" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Harga Jual</label>
	<input type="text" name="harga_jual" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Status</label>
	<input type="text" name="barang_status" class="form-control" id="" placeholder="">
</div>
<div class="card-footer">
<input type="submit" class="btn btn-success" value="Simpan"></input>
</div>
</form>
</div>
</div>

@endsection