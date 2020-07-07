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
	<h3>Input Category</h3>
	<form method="post" action="{{url('/category')}}">
	@csrf
		<table>					
					<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
					<div class="col-sm-5">
							<input type="text" name="name" class="bg-light  form-control" id="inputEmail3">
					</div>
					</div>
					

					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>
					<div class="col-sm-5">
						<input type="text" name="text" class="bg-light form-control" id="inputEmail3">
					</div>
				</table>
				<div class="form-group row">
						<div class="col-sm-10">
						<button type="submit" class="btn btn-success btn-md">SIMPAN</button></div>
					</div>
			</form>

	</div>
</div>
</body>
</html>


@endsection