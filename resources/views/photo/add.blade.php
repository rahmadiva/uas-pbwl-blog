@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>Category</title>

	<style type="text/css">

		h2	{
			margin-bottom: 30px;
		}
	</style>
</head>
<body>

<div class="container">
	<div class="col-md-10">
<h3>Tambah Photo</h3>
<form method="post" enctype="multipart/form-data" action="{{ url('/photo') }}">
	@csrf
	<table>
		<div class="form-group row">			
				<label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
			<div class="col-sm-5">	
				<input type="text" name="title" class="form-control bg-light" id="inputEmail3">
			</div>
			</div>
		<div class="form-group row">			
				<label for="inputEmail3" class="col-sm-2 col-form-label">Category</label>
			<div class="col-sm-5">
				<select name="post_id" class="form-control bg-light">
					@foreach($lst as $row)
					<option value="{{ $row->id }}">{{ $row->title }}</option>
					@endforeach 
				</select>
			
			</div>
			</div>
		<div class="form-group row">			
				<label for="inputEmail3" class="col-sm-2 col-form-label">File Foto</label>
			<div class="col-sm-5">	
				<input type="file" name="file">
			</div>
			</div>
		<div class="form-group row">			
				<label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>
			<div class="col-sm-5">	
				<input type="text" name="text" class="form-control bg-light" id="inputEmail3">
			</div>
			</div>
		<div class="form-group row">			
				<label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal</label>
			<div class="col-sm-5">	
				<input type="date" name="date" class="form-control bg-light"  id="inputEmail3">
			</div>
			</div>
		<tr>
			<th></th>
			<td><input id="btn" type="submit" value="SIMPAN"class="btn btn-success btn-md"></td>
		</tr> 
	</table>
</form>
</div>
@endsection