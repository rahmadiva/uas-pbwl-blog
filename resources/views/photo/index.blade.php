@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/post') }}">
	@csrf
	<h3>Daftar Photo<a id="tbh" href="{{ url('photo/create') }}"class="btn btn-info btn-sm">Tambah </a></h3>
	<table method="post">
		<tr>
			<th>ID</th>
			<th>POST</th>
			<th>JUDUL</th>
			<th>IMAGES</th>
			<th>KETERANGAN</th>
			<th>TANGGAL</th>
			<th>EDIT</th>
			<th>HAPUS</th>
		</tr>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td>{{ $row->post->title }}</td>
			<td>{{ $row->title }}</td>
			<td><img src="img\{{ $row->file }}"></td>
			<td>{{ $row->text }}</td>
			<td>{{ $row->date }}</td>
			<td><a id="btn"  href="{{ url('photo/'.$row->id.'/edit') }}"class="btn btn-primary btn-sm">Edit</a></td>
			<td><form action="{{ url('/photo/'.$row->id) }}" method="post">
				<input  type="hidden" name="_method" value="DELETE">
				@csrf
				<button id="btn"class="btn btn-danger btn-sm">Hapus</button>
			</form></td>
		</tr>
		@endforeach 
	</table>
</div>
@endsection