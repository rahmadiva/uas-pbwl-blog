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
<h3>Edit Kategori</h3>
<form method="post" action="{{ url('/category/'.$row->id) }}">
	<input type="hidden" name="_method" value="PATCH">
	@csrf
	<table>
		<div class="form-group row">
			<label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
		<div class="col-sm-5">
			<input type="text" name="cat_name" value="{{ $row->name}}" class="bg-light form-control" id="inputEmail3">
		</div>
		</div>

		<div class="form-group row">
			<label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>
		<div class="col-sm-5">
			<input type="text" name="cat_text" value="{{ $row->text}}" class="bg-light form-control" id="inputEmail3">
		</div>
		</div>
	</table>

<div class="form-group row">
			<div class="col-sm-10">
				<input type="submit" value="UPDATE" class="btn btn-success btn-md">
			<div>
			</div>
	</form>
</div>
</body>
</html>

@endsection