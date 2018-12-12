@extends('layouts.template')
@section('contentWebsite')

<div class="well well-lg">
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h3>List Kegiatan</h3>
      </div>
      <div class="col-sm-2">
        <a class="btn btn-sm btn-success" href="{{ route('kegiatan.create') }}">Tambahkan Data Kegiatan</a>
      </div>
    </div>

    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif

    <table class="table table-hover table-sm">
      <tr>
        <th width = "50px"><b>No.</b></th>
        <th width = "300px">Nama Kegiatan</th>
        <th>Deskripsi </th>
        <th>Pengisi Acara </th>
        <th>Waktu </th>
        <th>Kontak </th>
        <th>Lokasi </th>
        <th width = "180px">Action</th>
      </tr>

      @foreach ($kegiatans as $kegiatan)
        <tr>
          <td><b>{{++$i}}.</b></td>
          <td>{{$kegiatan->name}}</td>
          <td>{{$kegiatan->description}}</td>
          <td>{{$kegiatan->pengisi_acara}}</td>
          <td>{{$kegiatan->waktu_mulai}}</td>
          <td>{{$kegiatan->contact}}</td>
          <td><a href="{{ url("masjid/" . $kegiatan->masjid_id) }}">{{ $kegiatan->masjid->name }}</a></td>
          <td>
            <form action="{{ route('kegiatan.destroy', $kegiatan->id) }}" method="post">
              <a class="btn btn-sm btn-warning" href="{{route('kegiatan.edit',$kegiatan->id)}}">Edit</a>
              @csrf
            </form>
          </td>
        </tr>
      @endforeach
    </table>

{!! $kegiatans->links() !!}
  </div>
@endsection