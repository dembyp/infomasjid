@extends('layouts.template')
@section('contentWebsite')

<div class="well well-lg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Edit Data Kegiatan</h3>
      </div>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Maaf </strong> Ada masalah dengan data yang Anda isikan.<br>
        <ul>
          @foreach ($errors as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{route('kegiatan.update',$kegiatan->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-12">
          <strong>Judul Kegiatan :</strong>
          <input type="text" name="name" class="form-control" value="{{$kegiatan->name}}">
        </div>
        <div class="col-md-12">
          <strong>Deksripsi :</strong>
          <textarea class="form-control" name="description" rows="2" cols="80">{{$kegiatan->description}}</textarea>
        </div>
        <div class="col-md-12">
          <strong>Pengisi Acara :</strong>
          <input type="text" name="pengisi_acara" class="form-control" value="{{$kegiatan->pengisi_acara}}">
        </div>
        <div class="col-md-12">
          <strong>Waktu Pelaksanaan :</strong>
          <input type="text" name="waktu_mulai" class="form-control" value="{{$kegiatan->waktu_mulai}}">
        </div>
        <div class="col-md-12">
          <strong>Waktu Berakhir :</strong>
          <input type="text" name="waktu_berakhir" class="form-control" value="{{$kegiatan->waktu_berakhir}}">
        </div>
        <div class="col-md-12">
          <strong>Lokasi :</strong>
          <select name="masjid_id" id="" class="form-control">
            @foreach ($masjids as $masjid)
                <option
                   value="{{ $masjid->id }}"
                    @if ($masjid->id === $kegiatan->masjid_id)
                        selected
                    @endif>
                    {{ $masjid->name }}
                    </option>
                 @endforeach
            </select>
        </div>
        <div class="col-md-12">
          <strong>Kontak :</strong>
          <input type="text" name="contact" class="form-control" value="{{$kegiatan->contact}}">
        </div>
        <br>
        <div class="col-md-12">
          <a href="{{route('kegiatan.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
@endsection