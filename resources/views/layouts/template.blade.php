<!DOCTYPE html>
<html>
	<head>
		<title>SIKAM</title>
		<link href="{{ url("bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="{{ url("bootstrap/js/jquery-3.3.1.min.js") }}"></script>
		<script type="text/javascript" src="{{ url("bootstrap/js/bootstrap.min.js") }}"></script>
		<script type="text/javascript" src="{{ url("bootstrap/js/bootstrap-datetimepicker.min.js") }}"></script>
		<link rel="stylesheet" href="{{ url("bootstrap/css/bootstrap-datetimepicker.min.css") }}">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	</head>
	<body>
	<nav class="navbar navbar-fixed-top navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url("") }}">SIKAM</a>	
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					@guest
					<li class="active"><a href="{{ url("") }}">Home</a></li>
					<li><a href="{{ url("login") }}">Login</a></li>
					@if (Route::has('register'))
					<li><a href="{{ url("register") }}">Registrasi</a></li>
					@endif
					@else
					<li><a href="{{ url("masjid") }}">Data Masjid</a></li>
					<li><a href="{{ url("kegiatan") }}">Data Kegiatan</a></li>
					<li class="dropdown">
                                <a a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <li><a href="{{ route('changePassword') }}";>Change Password </a></li>
                                    <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
                                </ul>
                            </li>
                        @endguest
				</ul>
			</div>
		</div>
	</nav>
	<br>
	<br>

	@section('contentWebsite')
	@show
	<footer>
		<div class="container">
			<hr>
			<p class="pull-right"><a href="#">Back to Top</a></p>
			<p>	&copy; Copyright 2018 <a href="http://sikam.info" target="_blank">SIKAM</a></p>
		</div>		
	</footer>
	<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
<script>

    var popupSize = {
        width: 780,
        height: 550
    };

    $(document).on('click', '.social-buttons > a', function(e){

        var
            verticalPos = Math.floor(($(window).width() - popupSize.width) / 2),
            horisontalPos = Math.floor(($(window).height() - popupSize.height) / 2);

        var popup = window.open($(this).prop('href'), 'social',
            'width='+popupSize.width+',height='+popupSize.height+
            ',left='+verticalPos+',top='+horisontalPos+
            ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

        if (popup) {
            popup.focus();
            e.preventDefault();
        }

    });
</script>
	</body>
</html>