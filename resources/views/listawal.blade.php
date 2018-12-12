@extends('layouts.template')
@section('contentWebsite')
	<div class="well well-lg">
		<div class="container">
			<h2>Daftar Kegiatan</h2>
			<span>Halaman berisi list kegiatan </span>
		</div>
	</div>
	<div class="container">
		<table class="table table-bordered table-hover"><tr>
        <th width = "50px"><b>No.</b></th>
        <th width = "300px">Nama Kegiatan</th>
        <th>Pengisi Acara </th>
        <th>Waktu </th>
        <th>Lokasi </th>
        <th width = "180px">Action</th>
      </tr>
	    @foreach ($kegiatans as $kegiatan)
        <tr>
          <td><b>{{++$i}}.</b></td>
          <td>{{$kegiatan->name}}</td>
          <td>{{$kegiatan->pengisi_acara}}</td>
          <td>{{$kegiatan->waktu_mulai}}</td>
          <td>{{ $kegiatan->masjid->name }}</td>
          <td><a href="{{ url("awal/detail/" . $kegiatan->id) }}" class="btn btn-block btn-primary btn-sm"><i class="glyphicon glyphicon-search"></i> Detail</a></td>
		</tr>
		@endforeach
		</table>
       
	</div>
@endsection