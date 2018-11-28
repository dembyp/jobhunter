@extends('template')
@section('contentWebsite')
	<div class="well well-lg">
		<div class="container">
			<h2>Kontak Kami</h2>
			<span>Siapa yang bisa dihubungi ?</span>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-3">
				<div class="list-group">
					<a href="#kontak" class="list-group-item"><i class="glyphicon glyphicon-phone-alt"></i> Kontak Kami</a>
					<a href="{{ url("tentang") }}" class="list-group-item"><i class="glyphicon glyphicon-info-sign"></i> Tentang Website</a>
				</div>
			</div>
			<div class="col-xs-9">
			<div class="panel panel-default" id="kontak">
				<div class="panel-heading"><h3 style="padding:0; margin:0;">Kontak Kami</h3></div>
				<div class="panel-body">Terima kasih sudah mengunjungi website kami, apabila ada pertanyaan bisa menghubungi beberapa kontak dibawah ini:
				<br>
				<br>
				<ul>
				<li>Email: cs@sikam.info</li>
				<li>Website: sikam.info</li></ul>
			</div>
			</div>
		</div>
	</div>
@endsection