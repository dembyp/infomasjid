@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>New Data Masjid</h3>
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

    <form action="{{route('masjid.store')}}" method="post">
      @csrf
      <div class="row">
        <div class="col-md-12">
          <strong>Nama Masjid :</strong>
          <input type="text" name="name" class="form-control" placeholder="Nama Masjid">
        </div>
        <div class="col-md-12">
          <strong>Alamat :</strong>
          <textarea class="form-control" placeholder="Alamat Masjid" name="address" rows="2" cols="80"></textarea>
        </div>
        <div class="col-md-12">
          <strong>Kota/Kabupaten :</strong>
          <input type="text" name="city" class="form-control" placeholder="Kota atau Kabupaten">
        </div>
        <div class="col-md-12">
          <strong>Nomor Telepon :</strong>
          <input type="text" name="phone" class="form-control" placeholder="022-3xxxx atau 081XXXXXXX">
        </div>
        <div class="col-md-12">
          <strong>Email :</strong>
          <input type="text" name="email" class="form-control" placeholder="Email Masjid">
        </div>
        <div class="col-md-12">
          <strong>Latitude:</strong>
          <input type="text" name="lat" class="form-control" placeholder="-6.895929">
        </div>
        <div class="col-md-12">
          <strong>Longitude :</strong>
          <input type="text" name="long" class="form-control" placeholder="107.607399">
        </div>
        <div class="col-md-12">
          <a href="{{route('masjid.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>
@endsection