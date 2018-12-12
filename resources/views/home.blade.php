@extends('layouts.template')

@section('contentWebsite')
<div class="well well-lg">
    <div class="container"> 

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

                            You are logged in!
                </div>
        </div>  
    </div>
</div>
@endsection
