<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
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
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
      body, html{
        background:#000;
        font-family: 'Montserrat', sans-serif;
        max-width:100% !important;
        width:100% !important;
      }

      footer {
        background:#000;
        padding:0.5em !important;
        width:100%;
      }

      footer .pre-footer {
        text-align:center;
      }

      h1,h2,h3,h4,h5{
        font-family: 'Montserrat', sans-serif;
      }

      .row-custom {
        height:auto;
        min-height:95vh;
      }

      .ul-custom {
        list-style: none;
      }

      .ul-custom li {
        margin:15px;
      }

      .ul-custom li{
        color: #fff;
        font-size:18px;
      }

      .ul-custom li a{
        color: #fff;
      }

      .ul-custom-footer {
        list-style:none;
      }

      .ul-custom-footer li {
        display:inline-block;
        margin-left:0.5em;
      }

      .ul-custom-footer li a{
        color:#fff;
      }
    </style>
</head>
<body>
  <div id="app">
    <header class="mb-4">
      <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <a class="navbar-brand d-none" href="#" style="width: 10% !important">
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
