@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/post') }}">
	@csrf
	<h3>Daftar Post<a id="tbh" href="{{ url('post/create') }}"class="btn btn-info btn-sm">Tambah </a></h3>
	<table class="table">
	<thead class="table-dark">
		<tr>
			<th>ID</th>
			<th>CATEGORY</th>
			<th>JUDUL</th>
			<th>SLUG</th>
			<th>KETERANGAN</th>
			<th>TANGGAL</th>
			<th>EDIT</th>
			<th>HAPUS</th>
		</tr>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td>{{ $row->category->name }}</td>
			<td>{{ $row->title }}</td>
			<td>{{ $row->slug }}</td>
			<td>{{ $row->text }}</td>
			<td>{{ $row->date }}</td>
			<td><a id="btn"  href="{{ url('post/'.$row->id.'/edit') }}"class="btn btn-primary btn-sm">Edit</a></td>
			<td><form action="{{ url('/post/'.$row->id) }}" method="post">
				<input  type="hidden" name="_method" value="DELETE">
				@csrf
				<button id="btn"class="btn btn-danger btn-sm">Hapus</button>
			</form></td>
		</tr>
		@endforeach 
	</table>
</div>
@endsection