@extends('template')
@section('contentWebsite')
	<div class="jumbotron">
		<div class="container">
			<h2>Selamat Datang di Website Job Hunter Wahai Para Pencari Kerja</h2>
			<p>Bagi pencari kerja, mencari kerja tidak sulit asal anda mau berusaha dan tidak lupa berdoa. Salah satu usaha anda adalah melalui website yang kami buat ini. Silahkan isi data diri anda pada website ini, secara otomatis anda sudah memporomosikan data diri anda kepada dunia</p>
			<p><a href="{{ url("daftar") }}" class="btn btn-success btn-lg" role="button"><i class="glyphicon glyphicon-check"></i> Daftar Kerja</a>	
			<a href="{{ url("pendaftarkerja") }}" class="btn btn-primary btn-lg" role="button"><i class="glyphicon glyphicon-briefcase"></i>  Lihat Pencari Kerja</a></p>
		</div>
	</div>
	<div class="container">
		<h3>Random Pencari Kerja</h3>
		<hr>
		<div class="row">
		@foreach($pendaftar as $pencari)
			<div class="col-md-6">
				<table class="well table table-bordered">
					<tbody>
						<tr>
							<td rowspan="4" width="1"><img src="images/people.png" alt="People" class="img-circle" width="140" height="140"></td>
							<td width="100">Nama</td>
							<td width="1">:</td>
							<td>{{ $pencari->nama }}</td>
						</tr>
						<tr>
							<td>Email</td>
							<td>:</td>
							<td>{{ $pencari->email }}</td>
						</tr>
						<tr>
							<td>Pekerjaan</td>
							<td>:</td>
							<td>{{ $pencari->pekerjaan }}</td>
						</tr>
						<tr>
							<td colspan="3"><a href="{{ url("pendaftarkerja/detail/" . $pencari->id) }}" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-search"></i> Detail Pekerja</a></td>
						</tr>
					</tbody>
				</table>
			</div>
		@endforeach
		</div>
	<a href="{{ url("pendaftarkerja") }}" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-tasks"></i> Tampilkan Semua</a>	
	</div>
@endsection