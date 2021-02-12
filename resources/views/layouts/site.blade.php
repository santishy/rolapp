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
   
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Damion&display=swap" rel="stylesheet"> 
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
      body, html{
        background:#000;
        font-family: 'Montserrat', sans-serif;
        max-width:100% !important;
        width:100% !important;
      }

      .cursive-custom{
        font-family: 'Damion', cursive !important;
      }

      .border-bottom-custom {
        border-bottom:2px solid #fff;
      }

      footer {
        background:#000;
        height:2.5rem;
        padding:1rem !important;
        width:100%;
      }
      

      footer .pre-footer {
        text-align:center;
      }

      h1,h2,h3,h4,h5{
        font-family: 'Montserrat', sans-serif;
      }

      .lnk-one {
        transform:translateX(-62px);
      }

      .lnk-two {
        transform:translateX(62px);
      }

      .lnk-up {
        background-color:#353857;
        border-radius:45px;
        bottom:10%;
        color:white;
        height:45px;
        opacity:0.9;
        position:fixed;
        right: -50px;
        text-align:center;
        text-decoration:none;
        transition:0.2s all;
        width:45px;
      }

      .lnk-up span {
        font-weight:bold;
        line-height:2.8;
      }

      .lnk-up:hover {
        color:#fff !important;
        opacity:1;
      }

      .page-container {
        position:relative;
        min-height:100vh;
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
            <li class="nav-item active">
              <a class="nav-link nav-link-custom" data-link="divHome" href="/">INICIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-custom" data-link="divBiography" href="#">BIOGRAFÍA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-custom" data-link="divContact" href="#">CONTACTO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('songs') }}">CANCIONES</a>
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
          <a href="https://www.facebook.com/JorgeAlbertoAlejandreCompositor" target="_blank"><i class="fa fa-facebook-official fa-lg" aria-hidden="true"></i></a>
          </li>
          <li>
          <a href="#" target="_blank"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
          </li>
          <li>
          <a href="https://www.youtube.com/channel/UCtUXTtUHVl_bvpowqM0FaLQ"  target="_blank"><i class="fa fa-youtube-play fa-lg" aria-hidden="true"></i></a>
          </li>
          <li><a href="https://wa.me/5213531103303" target="_blank"><i class="fa fa-whatsapp fa-lg" aria-hidden="true"></i></a></li>
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
  <script>
    $(function() {
      $( window ).scroll(function() {
        if ($( this ).scrollTop() > 50) {
            $( ".lnk-up" ).addClass('lnk-one');
            $( ".lnk-up" ).removeClass('lnk-two');
        } else {
            $( ".lnk-up" ).addClass('lnk-two');
            $( ".lnk-up" ).removeClass('lnk-one');
        }
      });

      $( '#lnkUp' ).on("click",function(e) {
        e.preventDefault();
        $("html, body").animate({ scrollTop: 0}, 800);
        return false;
      });

      $( ".nav-link-custom" ).on('click',function(e) {
        e.preventDefault();
        var element = "#" + $( this ).data('link');

        $("html, body").animate({ scrollTop: $(element).offset().top}, 500);
      });
    });
  </script>      
</body>
</html>
