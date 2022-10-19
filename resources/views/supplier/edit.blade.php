@extends('layout.master')
@section('content')

<div class="card card-info">
<div class="card-header">
<h3 class="card-title">Edit Data Supplier</h3>
</div>

<form method="POST" action="/supplier/update/{{$supplier->id}}">
	 @csrf
	 @method('put')
<div class="card-body">
<div class="form-group">
	<label for="">Id Supplier</label>
	<input type="text" value="{{$supplier->id_supplier}}" name="id_supplier" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Nama Supplier</label>
	<input type="text" value="{{$supplier->supplier_nama}}"name="supplier_nama" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Alamat</label>
	<input type="text" value="{{$supplier->supplier_alamat}}" name="supplier_alamat" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Phone</label>
	<input type="text" value="{{$supplier->supplier_phone}}" name="supplier_phone" class="form-control" id="" placeholder="">
</div>
<div class="form-group">
	<label for="">Status</label>
	<input type="text" value="{{$supplier->supplier_status}}"name="supplier_status" class="form-control" id="" placeholder="">
</div>
<div class="card-footer">
<input type="submit" class="btn btn-success" value="Simpan"></input>
</div>
</form>
</div>
</div>

@endsection