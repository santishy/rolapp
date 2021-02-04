@extends('layouts.site')

@section('title','Jorge Albero Alejandre')
@section('content')
<div class="container-fluid mt-4">
  <div id="divHome" class="row row-custom mb-2">
    <div class="col col-lg-5 col-md-6 col-12 text-center">
      <img class="img-fluid align-middle" src="./images/logo.png" alt="logo" />
      <h1 class="mt-4 cursive-custom text-light">BIENVENIDO A MI PÁGINA</h1>
      <h2 class="text-light cursive-custom">Espero te guste mi material discográfico</h2>
    </div>
    <div class="col col-lg-7 col-md-6 col-12 text-center">
      <img class="img-fluid" src="images/home.jpeg" alt="Imagen Jorge Alexandere" />
    </div>
  </div>
  <!-- end row --> 
  <div id="divBiography" class="row row-custom text-light" style="background:#111;">
    <div class="col col-12 text-center">
      <h1 class="mb-2 mt-4 text-center font-weight-bold cursive-custom" style="border-bottom:1px solid #fff;">BIOGRAFÍA</h1>
    </div>
    <div class="col col-lg-6 col-12 mt-4 mb-2">
      <p class="text-justify align-middle" style="margin-top:10%;">Hola¡ mi nombre es Jorge Alberto Alejandre Romero, tengo la bendición de pertenecer a dos hermosos Estados que son: Guadalajara, Jalisco y Michoacán. El primero es donde nací y el segundo donde crecí y actualmente radico.
          Me dedico a dar clases y a componer, esto fue un don que Dios me regalo porque no tengo estudios que me respalden, soy empírico, esto fue desgastante pero nunca me rendí; lo único que te puedo decir es que no abandones tus sueños y metas. </p>
    </div>
    <div class="col col-lg-6 col-12 mb-2 text-center">
      <img src="images/bio.png" class="img-fluid mt-4" alt="foto biografia" />
    </div>
  </div>
  <!-- end row -->
  <div id="divContact" class="row row-custom">
    <div class="col col-lg-5 col-12" style="background:#111;border:4px solid #222;">
      <h1 class="mb-4 mt-5 text-center text-light cursive-custom" style="border-bottom:1px solid #fff;">CONTACTO</h1>
      <p class="text-justify align-middle text-light">Si deseas ponerte en contacto conmigo puedes contactarme a travéz de mi correo eléctronio y/o teléfono, o si lo prefieres dejame un mensaje, te atenderé a la brevedad</p>
      <ul class="ul-custom text-secondary mt-5">
        <li><a href="mailto: correo@email.com"><span class="material-icons align-middle">email</span> correo@email.com</a></li>
        <li><a href="tel: 3531103303"><span class="material-icons align-middle">local_phone</span> 3531103303</a></li>
      </ul>
    </div>
    <div class="col col-lg-7 col-12 text-light" style="background:#222;">
      <form action="" class="mt-4">
        <div class="form-group">
          <label for="txtName">Tu nombre</label>
          <input type="text" id="txtName" class="form-control form-control-lg" required />
        </div>
        <div class="form-group">
          <label for="txtEmail">Tu correo eléctronico</label>
          <input type="email" id="txtEmail" class="form-control form-control-lg" required />
        </div>
        <div class="form-group">
          <label for="txtPhone">Teléfono</label>
          <input type="text" id="txtPhone" class="form-control form-control-lg" />
        </div>
        <div class="form-group">
          <label for="txtSubject">Asunto</label>
          <input type="text" id="txtSubject" class="form-control form-control-lg" required />
        </div>
        <div class="form-group">
          <label for="txtName">Mensaje</label>
          <textarea name="" id="txtName" cols="30" rows="4" class="form-control form-control-lg" required></textarea>
        </div>
        <button type="submit" class="btn btn-danger btn-lg float-right">Enviar</button>
      </form>
    </div>
  </div>
  <!-- end row -->
  <footer class="mt-3">
    <div class="pre-footer">
      <ul class="ul-custom-footer">
        <li>
        <a href="#"><i class="fa fa-facebook-official fa-lg" aria-hidden="true"></i></a>
        </li>
        <li>
        <a href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
        </li>
        <li>
        <a href="#"><i class="fa fa-youtube-play fa-lg" aria-hidden="true"></i></a>
        </li>
        <li><a href="#"><i class="fa fa-whatsapp fa-lg" aria-hidden="true"></i></a></li>
      </ul>
    </div>
    <div class="div-footer text-lg-left text-center">
      <span class="text-light">Jorge Alberto Alejandre © 2021</span>
      <span class="d-block d-sm-none"> | </span>
      <span  class="text-light float-md-right">Powered by: <a href="#" class="text-info font-weight-bold">NS</a></span>
    </div>
  </footer>
</div>
<!-- end container -->
@endsection

