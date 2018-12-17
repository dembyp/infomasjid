@extends('layouts.template')

@section('contentWebsite')
<div class="well well-lg">
    <div class="container "> 
        <div class="panel panel-default">
            <div class="panel-heading">
            <h3 class="panel-title">Dashboard</h3>
            </div>
                <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                                        
                            <div class="row">
                                <div class="col-sm-4 text-center">
                                <a href="{{ url("masjid") }}">
                                <img src="images/mosque-masjid.png" class="img-responsive" style="width:90%" alt="Data Masjid">
                                <h3>Data Masjid</h3>
                                </a>
                                </div>
                                <div class="col-sm-4 text-center"> 
                                <a href="{{ url("kegiatan") }}">
                                <img src="images/mosque-masjid.png" class="img-responsive" style="width:90%" alt="Data Kegiatan">
                                <h3>Data Kegiatan</h3>
                                </a>    
                                </div>
                                <div class="col-sm-4 "> 
                                <div class="well">
                                    <p>Lorem Ipsum...</p>
                                    </div>
                                    <div class="well">
                                    <p>Lorem Ipsum...</p>
                                    </div>
                                    <div class="well">
                                    <p>Lorem Ipsum...</p>
                                </div>
                            </div>
                            </div><br>
                    </div>
                    </div>
                    </div>
                </div>
        </div>  
    </div>
</div>
</div>
@endsection
