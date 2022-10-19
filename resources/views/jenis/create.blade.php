@extends('layout.master')
@section('content')

<div class="card card-info">
<div class="card-header">
<h3 class="card-title">Tambah Data Barang</h3>
</div>

<form method="POST" action="/jenis/store">
	 @csrf
<div class="card-body">
<div class="form-group">
	<label for="">Nama Jenis</label>
	<input type="text" name="jenis_nama" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Status</label>
	<input type="text" name="jenis_status" class="form-control" id="" placeholder="">
</div>
<div class="card-footer">
<input type="submit" class="btn btn-success" value="Simpan"></input>
</div>
</form>
</div>
</div>

@endsection