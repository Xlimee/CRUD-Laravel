@extends('layout.master')
@section('content')

<div class="card card-info">
<div class="card-header">
<h3 class="card-title">Tambah Data Supplier</h3>
</div>

<form method="POST" action="/supplier/store">
	 @csrf
<div class="card-body">

<div class="form-group">
	<label for="">Nama Supplier</label>
	<input type="text" name="supplier_nama" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Alamat</label>
	<input type="text" name="supplier_alamat" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Phone</label>
	<input type="text" name="supplier_phone" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Status</label>
	<input type="text" name="supplier_status" class="form-control" id="" placeholder="">
</div>
<div class="card-footer">
<input type="submit" class="btn btn-success" value="Simpan"></input>
</div>
</form>
</div>
</div>

@endsection