<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Enterprise Competitiveness Institute</title>
    <script src="{{ asset('public/admin_assets/js/jquery.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('admin_assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('frontend_assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}" defer></script>

    <link rel="stylesheet" href="{{ asset('frontend_assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/main.css') }}">



    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css"> --}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    @stack('styles')
    @stack('header-scripts')
</head>
<body>
	<nav class="navbar navbar-expand-md custom-menu">
		<div class="container">
			<a class="navbar-brand" href="{{ url('/home') }}"><img src="{{ asset('public/frontend_assets/img/logo.png')}}" alt=""></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
			</button>
			<div class="collapse navbar-collapse flex-row-reverse" id="collapsibleNavbar">
				<ul class="navbar-nav">  
					@guest
							{{-- <li class="nav-item"> --}}
								{{-- <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> --}}
							{{-- </li> --}}
							<li class="nav-item">
								<a class="nav-link" href="{{ route('admin.login') }}">{{ __('Administration')}} </a>
							</li>
						
							
						@else
							<li class="nav-item">
								<a class="nav-link" href="#">{{ __('Profile')}} </a>
                            </li>
                            
							

							<li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									{{ Auth::user()->name }} <span class="caret"></span>
								</a>
								

								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ route('logout') }}"
									onclick="event.preventDefault();
													document.getElementById('logout-form').submit();">
										{{ __('Logout') }}
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>

									
								</div>
							</li>
						@endguest
				</ul>
			</div> 
		</div> 
	</nav>