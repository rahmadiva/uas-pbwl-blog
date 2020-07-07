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
<h3>Edit Album</h3>
<form method="post" action="{{ url('/album/'.$row->id) }}">
	<input type="hidden" name="_method" value="PATCH">
	@csrf
	<table>
		<div class="form-group row">			
			<label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
		<div class="col-sm-5">
			<input type="text" name="name" value="{{ $row->name }}"id="inputEmail3" class="form-control bg-light">
		</div>
		</div>
		<div class="form-group row">			
			<label for="inputEmail3" class="col-sm-2 col-form-label">Category</label>
		<div class="col-sm-5">
				<select name="photos_id"class="form-control bg-light">
					<option value="{{ $row->photo->id }}" >{{ $row->photo->title }}</option>
					@foreach($lst as $rows)
					<option value="{{ $rows->id }}" >{{ $rows->title }}</option>
					@endforeach 
				</select>
			</div>
		</div>
		<div class="form-group row">
			<label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>	
		<div class="col-sm-5">
			<input type="text" name="text" value="{{ $row->text }}"id="inputEmail3" class="form-control bg-light">
		</tr>
		<tr>
			<td></td>
			<td><input id="btn" type="submit" value="UPDATE"class="btn btn-success btn-md"></td>
		</tr> 
	</table>
</form>
</div>
@endsection