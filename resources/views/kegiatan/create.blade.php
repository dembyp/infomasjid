@extends('layouts.template')
@section('contentWebsite')

<div class="well well-lg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Tambah Data Kegiatan</h3>
      </div>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Maaf! </strong> Ada masalah dengan data yang Anda isikan.<br>
        <ul>
          @foreach ($errors as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('kegiatan.store') }}" method="post">
      @csrf
      <div class="row">
        <div class="col-md-12">
          <strong>Nama Kegiatan :</strong>
          <input type="text" name="name" class="form-control" placeholder="Nama Kegiatan">
        </div>
        <div class="col-md-12">
          <strong>Deskripsi :</strong>
          <textarea class="form-control" placeholder="Isi tentang deskripsi kegiatan dan peserta" name="description" rows="2" cols="80"></textarea>
        </div>
        <div class="col-md-12">
          <strong>Pengisi Acara :</strong>
          <input type="text" name="pengisi_acara" class="form-control" placeholder="Nama Pengisi Acara Contoh Ustadz Fulan bin Fulan">
        </div>
        <div class="col-md-12">
          <strong>Waktu Mulai :</strong>
          <input type="text" name="waktu_mulai" id="waktu_mulai" class="form-control form_datetime" placeholder="YYYY-MM-DD HH:MM:SS">
          <script type="text/javascript">
           $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii:ss'});
          </script>            
        </div>
        <div class="col-md-12">
          <strong>Waktu Berakhir :</strong>
          <input type="text" name="waktu_berakhir" id="waktu_berakhir"class="form-control form_datetime" placeholder="YYYY-MM-DD HH:MM:SS">
          <script type="text/javascript">
           $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii:ss'});
          </script> 
        </div>
        <div class="col-md-12">
          <strong>Kontak:</strong>
          <input type="text" name="contact" class="form-control" placeholder="Nama (NomorHP/WA/Telegram/Email)">
        </div>
        <div class="col-md-12">
          <strong>Lokasi</strong>
            <select name="masjid_id" id="" class="form-control">
                @foreach ($masjids as $masjid)
                <option value="{{ $masjid->id }}" >
                        {{ $masjid->name }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-12">
          <a href="{{ route('kegiatan.index') }}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>
@endsection