@extends('layout.master')
@section('content')

<div class="card card-info">
<div class="card-header">
<h3 class="card-title">Edit Data Admin</h3>
</div>

<form method="POST" action="/barang/update/{{$barang->id}}">
	 @csrf
	 @method('put')
<div class="card-body">
<div class="form-group">
	<label for="">Id Barang</label>
	<input type="text" value="{{$barang->id_barang}}" name="id_barang" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Kode barang</label>
	<input type="text" value="{{$barang->barang_kode}}"name="barang_kode" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Nama Barang</label>
	<input type="text" value="{{$barang->barang_nama}}" name="barang_nama" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Id Jenis</label>
	<input type="text" value="{{$barang->id_jenis}}" name="id_jenis" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Id Supplier</label>
	<input type="text" value="{{$barang->id_supplier}}"name="id_supplier" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Harga Jual</label>
	<input type="text" value="{{$barang->harga_jual}}"name="harga_jual" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Status</label>
	<input type="text" value="{{$barang->barang_status}}"name="barang_status" class="form-control" id="" placeholder="">
</div>
<div class="card-footer">
<input type="submit" class="btn btn-success" value="Simpan"></input>
</div>
</form>
</div>
</div>

@endsection