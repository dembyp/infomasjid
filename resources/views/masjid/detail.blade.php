@extends('layouts.template')
@section('contentWebsite')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Detail Masjid</h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>Nama Masjid/Mushola : </strong> {{$masjid->name}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Alamat : </strong> {{$masjid->address}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Kota/Kabupaten : </strong> {{$masjid->city}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Telpon : </strong> {{$masjid->phone}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Email : </strong> {{$masjid->email}}
        </div>
      </div>
      <div class="col-md-12">
        <a href="{{ route('masjid.index') }}" class="btn btn-sm btn-success">Data Masjid</a>
        <a href="{{ route('kegiatan.index') }}" class="btn btn-sm btn-success">Data Kegiatan</a>
      </div>
    </div>
  </div>
@endsection