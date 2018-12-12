@extends('layouts.template')
@section('contentWebsite')
<div class="well well-lg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Edit Data Masjid</h3>
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

    <form action="{{route('masjid.update',$masjid->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-12">
          <strong>Nama Masjid/Mushola :</strong>
          <input type="text" name="name" class="form-control" value="{{$masjid->name}}">
        </div>
        <div class="col-md-12">
          <strong>Alamat :</strong>
          <textarea class="form-control" name="address" rows="2" cols="80">{{$masjid->address}}</textarea>
        </div>
        <div class="col-md-12">
          <strong>Kota/Kabupaten :</strong>
          <input type="text" name="city" class="form-control" value="{{$masjid->city}}">
        </div>
        <div class="col-md-12">
          <strong>Telpon :</strong>
          <input type="text" name="phone" class="form-control" value="{{$masjid->phone}}">
        </div>
        <div class="col-md-12">
          <strong>Email :</strong>
          <input type="text" name="email" class="form-control" value="{{$masjid->email}}">
        </div>
        <div class="col-md-12">
          <strong>Latitude :</strong>
          <input type="text" name="lat" class="form-control" value="{{$masjid->lat}}">
        </div>
        <div class="col-md-12">
          <strong>Longitude :</strong>
          <input type="text" name="long" class="form-control" value="{{$masjid->long}}">
        </div>
        <div class="col-md-12">
          <a href="{{route('masjid.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
  </div>
@endsection