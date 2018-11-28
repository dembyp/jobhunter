@extends('template')
@section('contentWebsite')
	<div class="well well-lg">
		<div class="container">
			<h2>Detail Pendaftar Kerja</h2>
			<span>Halaman detail untuk {{ $pendaftar -> nama }}</span>
		</div>
	</div>
	<div class="container">
		<table class="well table table-bordered">
			<tr>
				<td width="200">Nama</td>
				<td width="1">:</td>
				<td>{{ $pendaftar -> nama }} </td>
			</tr>
			<tr>
				<td width="200">Email</td>
				<td width="1">:</td>
				<td>{{ $pendaftar -> email }} </td>
			</tr>
			<tr>
				<td width="200">Pekerjaan yang dicari</td>
				<td width="1">:</td>
				<td>{{ $pendaftar -> pekerjaan }} </td>
			</tr>
			<tr>
				<td width="200">Alamat</td>
				<td width="1">:</td>
				<td>{{ $pendaftar -> alamat }} </td>
			</tr>
			<tr>
				<td width="200">Resume</td>
				<td width="1">:</td>
				<td>{{ $pendaftar -> resume }} </td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><a href="mailto:{{ $pendaftar->email }}" class="btn btn-danger"><i class="glyphicon glyphicon-envelope"></i> Kirim Email</a><a href="{{ url("pendaftarkerja") }}" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i> Kembali ke Daftar</a></td>
			</tr>			
		</table>
	</div>
@endsection