@extends('layouts.template')
@section('contentWebsite')
	<div class="well well-lg">
		<div class="container">
			<h2>Detail Kegiatan</h2>
			<span>Halaman detail untuk {{ $kegiatans -> name }}</span>
		</div>
	</div>
	<div class="container">
		<table class="well table table-bordered">
			<tr>
				<td width="200">Judul Kegiatan</td>
				<td width="1">:</td>
				<td>{{ $kegiatans -> name }} </td>
			</tr>
			<tr>
				<td width="200">Deskripsi</td>
				<td width="1">:</td>
				<td>{{ $kegiatans -> description }} </td>
			</tr>
			<tr>
				<td width="200">Pengisi Acara</td>
				<td width="1">:</td>
				<td>{{ $kegiatans -> pengisi_acara }} </td>
			</tr>
			<tr>
				<td width="200">Waktu Pelaksanan</td>
				<td width="1">:</td>
				<td>{{ $kegiatans -> waktu_mulai }} sampai dengan {{ $kegiatans -> waktu_berakhir }}</td>
			</tr>
			<tr>
				<td width="200">Lokasi</td>
				<td width="1">:</td>
				<td>{{ $kegiatans -> masjid -> name }} </td>
			</tr>
            <tr>
				<td width="200">Kontak</td>
				<td width="1">:</td>
				<td>{{ $kegiatans -> contact }} </td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><a href="{{ url("listawal") }}" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i> Kembali ke Daftar Kegiatan</a></td>
			</tr>			
		</table>
	</div>
@endsection