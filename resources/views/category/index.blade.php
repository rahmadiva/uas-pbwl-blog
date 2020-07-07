@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/category') }}">
	@csrf
	<h3>Daftar Kategori<a id="tbh" href="{{ url('category/create') }}"class="btn btn-info btn-sm">Tambah</a></h3>
	<table class="table">
	<thead class="table-dark">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Keterangan</th>
			<th>Edit</th>
			<th>Hapus</th>
		</tr>
	</thead>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td>{{ $row->name }}</td>
			<td>{{ $row->text }}</td>
			<td><a id="btn"  href="{{ url('category/'.$row->id.'/edit') }}"class="btn btn-primary btn-sm">Edit</a></td>
			<td><form action="{{ url('/category/'.$row->id) }}" method="post">
				<input  type="hidden" name="_method" value="DELETE">
				@csrf
				<button id="btn"class="btn btn-danger btn-sm">Hapus</button>
			</form></td>
		</tr>
		@endforeach 
	</table>
</div>
@endsection