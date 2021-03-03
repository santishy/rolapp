<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Jorge Alberto Alejandre cantante y compositor. Composición de canciones de cualquier género, arreglos musicales, composición de canciones por encargo">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32" />
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet"> 

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet"> 

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 
   
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Damion&display=swap" rel="stylesheet"> 
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('lightbox/css/lightbox.css') }}" rel="stylesheet">
</head>
<body class="body-custom">
  <div class="page-container-fluid" id="app">
    <header class="mb-4">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand d-none" href="#" style="width: 10% !important">
        <img class="img-responsive" src="images/logo_can.png" width="30%" alt="logo" />
      </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mx-auto">
            <li class="nav-item">
              <a class="nav-link" data-link="divHome" href="{{ url('/') }}">INICIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-custom" data-link="divBiography" href="{{ url('/') }}#divBiography">BIOGRAFÍA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-custom" data-link="divContact" href="{{ url('/') }}#divContact">CONTACTO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('albums') }}">CANCIONES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('videos') }}">VIDEOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('gallery') }}">GALERÍA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.facebook.com/jorgealberto.compositor" target="_blank" title="Visita mi facebook"><i class="fa fa-facebook-official fa-lg" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.instagram.com/jorgealbertoalejandre/" target="_blank" title="Visita mi instagram"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.youtube.com/channel/UCtUXTtUHVl_bvpowqM0FaLQ"  target="_blank" title="Visita mi canal en youtube"><i class="fa fa-youtube-play fa-lg" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://wa.me/5213531103303" target="_blank" title="Contáctame por whatsapp"><i class="fa fa-whatsapp fa-lg" aria-hidden="true"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <main class="container-fluid py-4">
        @yield('content')
    </main>
    <a id="lnkUp" href="#" class="lnk-up" title="Ir arriba">
      <span>
        <i class="fa fa-arrow-up"></i>
      </span>
    </a>
    
    <footer class="mt-3">
      <div class="pre-footer">
        <ul class="ul-custom-footer">
          <li>
          <a href="https://www.facebook.com/jorgealberto.compositor" target="_blank" title="Visita mi facebook"><i class="fa fa-facebook-official fa-lg" aria-hidden="true"></i></a>
          </li>
          <li>
          <a href="https://www.instagram.com/jorgealbertoalejandre/" target="_blank" title="Visita mi instagram"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
          </li>
          <li>
          <a href="https://www.youtube.com/channel/UCtUXTtUHVl_bvpowqM0FaLQ"  target="_blank" title="Visita mi canal en youtube"><i class="fa fa-youtube-play fa-lg" aria-hidden="true"></i></a>
          </li>
          <li><a href="https://wa.me/5213531103303" target="_blank" title="Contáctame por whatsapp"><i class="fa fa-whatsapp fa-lg" aria-hidden="true"></i></a></li>
        </ul>
      </div>
      <div class="div-footer text-lg-left text-center">
        <span class="text-light">Jorge Alberto Alejandre © 2021</span>
        <span class="d-block d-sm-none"> | </span>
        <span  class="text-light float-md-right">Powered by: <a href="#" class="text-info font-weight-bold">NS</a></span>
      </div>
    </footer>
    
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
			  crossorigin="anonymous"></script>   
  <script src="{{ asset('lightbox/js/lightbox.js') }}"></script>      
  <script src="{{ asset('js/main.js') }}"></script>       
</body>
</html>
