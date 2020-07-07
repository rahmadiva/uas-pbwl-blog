@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

		h2	{
			margin-bottom: 30px;
		}

	</style>
</head>
<body>

<div class="container">
	<div class="col-md-10">
<h3>Tambah Album</h3>
<form method="post" action="{{ url('/album') }}">
	@csrf
	<table>
		<div class="form-group row">			
				<label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
			<div class="col-sm-5">	
				<input type="text" name="name" class="form-control bg-light" id="inputEmail3">
			</div>
			</div>
		<div class="form-group row">			
				<label for="inputEmail3" class="col-sm-2 col-form-label">Category</label>
			<div class="col-sm-5">
				<select name="photos_id"class="form-control bg-light">
					@foreach($lst as $row)
					<option value="{{ $row->id }}">{{ $row->title }}</option>
					@endforeach 
				</select>
			</div>
			</div>
		<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Slug</label>
			<div class="col-sm-5">
				<input type="text" name="text" class="bg-light form-control" id="inputEmail3">
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