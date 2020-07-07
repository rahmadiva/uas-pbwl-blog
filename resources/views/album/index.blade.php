@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/post') }}">
	@csrf
	<h3>Daftar Album<a id="tbh" href="{{ url('album/create') }}"class="btn btn-info btn-sm">Tambah</a></h3>
	<table method="post">
		<tr>
			<th>ID</th>
			<th>NAMA</th>
			<th>KETERANGAN</th>
			<th>FOTO</th>
			<th>EDIT</th>
			<th>HAPUS</th>
		</tr>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td>{{ $row->name }}</td>
			<td>{{ $row->text }}</td>
			<td><img src="img\{{ $row->photo->file }}"></td>
			<td><a id="btn"  href="{{ url('album/'.$row->id.'/edit') }}"class="btn btn-primary btn-sm">Edit</a></td>
			<td><form action="{{ url('/album/'.$row->id) }}" method="post">
				<input  type="hidden" name="_method" value="DELETE">
				@csrf
				<button id="btn"class="btn btn-danger btn-sm">Hapus</button>
			</form></td>
		</tr>
		@endforeach 
	</table>
</div>
@endsection