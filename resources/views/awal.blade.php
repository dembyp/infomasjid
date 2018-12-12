@extends('layouts.template')
@section('contentWebsite')
	<div class="jumbotron">
		<div class="container">
			<h2>Informasi Kegiatan Masjid</h2>
			<p>Website ini bertujuan untuk menginformasikan kegiatan-kegiatan yang dilaksanakan di masjid atau mushola. Silahkan bergabung dan informasikan kegiatan-kegiatan di Masjid atau Mushola yang anda datangi.</p>
			<p><a href="{{ url("register") }}" class="btn btn-success btn-lg" role="button"><i class="glyphicon glyphicon-check"></i> Registrasi</a>	
			<a href="{{ url("listawal") }}" class="btn btn-primary btn-lg" role="button"><i class="glyphicon glyphicon-briefcase"></i>  Lihat Data Kegiatan</a></p>
		</div>
	</div>
	<div class="container">
		<h3> Kegiatan Terbaru</h3>
		<hr>
		<div class="row">
		@foreach ($kegiatans as $kegiatan)	
			<div class="col-md-4">
				<table class="well table table-bordered">
					<tbody>
						<tr>
							<td width="100">Nama Kegiatan</td>
							<td width="1">:</td>
							<td>{{ $kegiatan->name }}</td>
						</tr>
						<tr>
							<td>Pengisi Acara</td>
							<td>:</td>
							<td>{{ $kegiatan->pengisi_acara }}</td>
						</tr>
						<tr>
							<td>Waktu Pelaksanaan</td>
							<td>:</td>
							<td>{{ $kegiatan->waktu_mulai }}</td>
						</tr>
						<tr>
							<td>Lokasi</td>
							<td>:</td>
							<td>{{ $kegiatan->masjid->name }}</td>
						</tr>
						<tr>
							<td colspan="3"><a href="{{ url("awal/detail/" . $kegiatan->id)}}" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-search"></i> Detail Kegiatan</a></td>
						</tr>
					</tbody>
				</table>
			</div>
		@endforeach
		</div>
	<a href="{{ url("listawal") }}" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-tasks"></i> Tampilkan Semua</a>	
	</div>
@endsection