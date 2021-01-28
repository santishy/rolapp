<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
 
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
      body{
        background:#000;
      }

      .row-custom {
        height:95vh;
        min-height:95vh;
      }
    </style>
</head>
<body>
  <div id="app">
    <header class="mb-4">
      <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <a class="navbar-brand" href="#" style="width: 10% !important">
        <img class="img-responsive" src="images/logo_can.png" width="30%" alt="logo" />
      </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mx-auto">
            <li class="nav-item active">
              <a class="nav-link" data-link="divHome" href="#">INICIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-link="divBiography" href="#">BIOGRAFÍA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" da-link="divContact" href="#">CONTACTO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CANCIONES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">VIDEOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa fa-facebook-official fa-lg" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa fa-youtube-play fa-lg" aria-hidden="true"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <main class="py-4">
        @yield('content')
    </main>
  </div>
</body>
</html>
