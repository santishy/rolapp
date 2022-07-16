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
              <a class="nav-link" href="{{ url('videos') }}">VIDEOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('gallery') }}">GALERÍA</a>
            </li>
            <!--<li class="nav-item">
              <a class="nav-link" href="{{ url('eventos') }}">PRESENTACIONES</a>
            </li>-->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                PAREJAS
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Jóvenes</a>
                <a class="dropdown-item" href="#">Matrimonio</a>
                <a class="dropdown-item" href="#">Amasiato</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('alabanzas') }}">ALABANZAS</a>
            </li>
            <li class="nav-item d-none">
              <a class="nav-link" href="{{ url('albums') }}">CANCIONES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('songs') }}">DESCARGA</a>
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
            <a href="#" data-toggle="modal" data-target="#modalTerms" title="Ver términos y condiciones">Términos y condiciones |</a>
          </li>
          <li>
            <a href="#" data-toggle="modal" data-target="#modalPrivacity" title="Ver aviso de privacidad">Aviso de privacidad </a>
          </li>
        </ul>
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
    <!-- modals -->
    <div class="modal" id="modalTerms" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Términos Y Condiciones</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p class="font-weight-bold">Derechos de propiedad.</p>
            <p class="paragraph-custom">Este sitio web es propiedad y esta operado por Jorge Alberto Alejandre, quien es dueño único y exclusivo de todos los derechos
            ,títulos y contenido gráfico (imágenes, logotipos, audios, videos , etc) del sitio web.
            </p>
            <p class="font-weight-bold">Cómo comprar.</p>
            <p class="paragraph-custom">
              Para realizar una compra no es necesario registrarse como cliente en el sitio web.
            </p>
            <p class="font-weight-bold">Condiciones comerciales.</p>
            <p class="paragraph-custom">
              Los precios que cobramos para nuestros productos se enumeran en el sitio web.Nos reservamos el derecho de cambiar nuestros precios para los productos que se muestran en cualquier momento y de corregir los errores de precios que puedan ocurrir inadvertidamente.
              El precio manejado con los productos incluye el costo del impuesto IVA.
            </p>
            <p class="font-weight-bold">Derecho a cambiar y modificar los Términos.</p>
            <p class="paragraph-custom">
              Nos reservamos el derecho de modificar estos térmnos de vez en cuando a nuestra entera discreción. 
              Por lo tanto debes revisar esta sección periódicamente.
              Te informamos que al acceder a nuestro sitio web www.jorgealbertoalejandre.com y realizar alguna transacción confirmas que estás enterado de su términos y los aceptas, en caso contrario te pedimos abstenerte de la utilización y realización de alguna transacción en virtud de la aceptación de los mismos.
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Aceptar</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal" id="modalPrivacity" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Aviso De Privacidad</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p class="paragraph-custom">
              Jorge Alberto Alejandre protege y salvaguarda sus datos personales para evitar el daño, pérdida,
              destrucción, alteración así como el tratamiento no autorizado.
              Así mismo no se utilizarán sus datos personales para que sean divulgados bajo ninguna circunstancia.
            </p>
            <p class="paragraph-custom">
              Sus datos personales, serán utilizados para las siguientes finalidades:
              <ul>
                <li>
                  Registrar los datos de las compras
                </li>
                <li>
                  Notificar acerca de promociones y/o contenido nuevo en el sitio web.
                </li>
              </ul>
            </p>
            <p class="paragraph-custom">
              En caso de estar suscrito a las notificaciones, podrá cancelar dicha suscripción en el momento que así lo desee.
            </p>
            <p class="paragraph-custom">
              El presente Aviso de Privacidad podrá ser modificado en el futuro. En todo caso, cualquier modificación al mismo se hará de su conocimiento 
              mediante el envío de un correo electrónico a la cuenta que usted nos proporcionó al momento de suscribirse y/o 
              mediante la publicación del mismo en el sitio web www.jorgealbertoalejandre.com. <br />
              No seremos responsables en el caso de que usted no reciba la notificación de cambio en el Aviso de Privacidad
              por causa de algún problema con su cuenta de correo eléctronico o de transmisión de datos por internet.
              Sin embargo, por su seguridad, el Aviso de Privacidad vigente estará en todo momento disponible en el sitio web
              www.jorgealbertoalejandre.com.
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Aceptar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- modals -->
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
			  crossorigin="anonymous"></script>   
  <script src="{{ asset('lightbox/js/lightbox.js') }}"></script>      
  <script src="{{ asset('js/main.js') }}"></script>       
</body>
</html>
