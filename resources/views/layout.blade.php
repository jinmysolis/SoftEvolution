<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>@yield('meta-title','SoftEvolution')</title>
        <meta name="description" content="@yield('meta-content','Este es el blog de jinmy')">
	<link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
	<link rel="stylesheet" href="{{ asset('css/framework.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        
     @stack('scripts')
</head>
<body>
	<div class="preload"></div>
	<header class="space-inter">
		<div class="container container-flex space-between">
			<figure class="logo"><img src="img/logo.png" alt=""></figure>
			<nav class="custom-wrapper" id="menu">
				<div class="pure-menu"></div>
				<ul class="container-flex list-unstyled">
					<li><a href="{{ route('login') }}" class="text-uppercase">Login</a></li>
					<li><a href="{{ route('register') }}" class="text-uppercase">Registro</a></li>
					<li><a href="{{ route('informacion') }}" class="text-uppercase">Informacion del sistema</a></li>
					
				</ul>
			</nav>
			
		</div>
	</header>
        
        
<!--      ///////////////////contenidodinamico//////////////////////////-->
    
  @yield('content')


        <section class="footer">
		<footer>
			<div class="container">
				<figure class="logo"><img src="img/logo.png" alt=""></figure>
				
				<div class="divider-2"></div>
				<p>Nunc placerat dolor at lectus hendrerit dignissim. Ut tortor sem, consectetur nec hendrerit ut, ullamcorper ac odio. Donec viverra ligula at quam tincidunt imperdiet. Nulla mattis tincidunt auctor.</p>
				<div class="divider-2" style="width: 80%;"></div>
				<p>© 2018 - Prueba & para <span class="c-white">SoftEvolution</span></p>
				<ul class="social-media-footer list-unstyled">
					<li><a href="#" class="fb"></a></li>
					<li><a href="#" class="tw"></a></li>
					<li><a href="#" class="in"></a></li>
					<li><a href="#" class="pn"></a></li>
				</ul>
			</div>
		</footer>
	</section>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>