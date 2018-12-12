@extends('layouts.template')
@section('contentWebsite')
<div class="well well-lg">
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h2>List Masjid</h2>
      </div>
      <div class="col-sm-2">
        <a class="btn btn-sm btn-success" href="{{ route('masjid.create') }}">Tambahkan Data Masjid</a>
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
        <th width = "300px">Nama Masjid</th>
        <th>Alamat </th>
        <th>Kota </th>
        <th width = "180px">Action</th>
      </tr>

      @foreach ($masjids as $masjid)
        <tr>
          <td><b>{{++$i}}.</b></td>
          <td>{{$masjid->name}}</td>
          <td>{{$masjid->address}}</td>
          <td>{{$masjid->city}}</td>
          <td>
            <form action="{{ route('masjid.destroy', $masjid->id) }}" method="post">
              <a class="btn btn-sm btn-success" href="{{route('masjid.show',$masjid->id)}}">Show</a>
              <a class="btn btn-sm btn-warning" href="{{route('masjid.edit',$masjid->id)}}">Edit</a>
              @csrf
              <!-- @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger">Delete</button> --!>
            </form>
          </td>
        </tr>
      @endforeach
    </table>

{!! $masjids->links() !!}
  </div>
@endsection