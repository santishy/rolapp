@extends('layouts.site')

@section('title','Jorge Alberto Alejandre')
@section('content')

@if(session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
    <p class="h5">{{ session()->get('success') }}</p>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

@if($errors->any())
  <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
    <p class="h5">{{ $errors->first() }}</p>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

<div id="divHome" class="row row-custom mb-2">
  <div class="col col-lg-5 col-md-6 col-12 text-center">
    <img class="img-fluid align-middle" src="./images/logo.png" alt="logo" />
    <h1 class="mt-4 cursive-custom text-light">CANTAUTOR CATÓLICO</h1>
    <h2 class="mt-4 cursive-custom text-light">BIENVENIDO A MI PÁGINA</h2>
    <h3 class="text-light cursive-custom">Espero te guste mi material musical</h3>
  </div>
  <div class="col col-lg-7 col-md-6 col-12 text-center">
    <img class="img-fluid" src="images/home.jpeg" alt="Imagen Jorge Alexandere" />
  </div>
</div>
<!-- end row --> 
<div id="divBiography" class="row row-custom text-light" style="background:#000;">
  <div class="col col-12 text-center">
    <h1 class="mb-2 mt-5 text-center font-weight-bold cursive-custom" style="border-bottom:1px solid #fff;">BIOGRAFÍA</h1>
  </div>
  <div class="col col-lg-6 col-12 mt-4 mb-2">
    <p class="text-justify align-middle font-custom mt-2">Hola¡ mi nombre es Jorge Alberto Alejandre Romero, tengo la bendición de pertenecer a dos hermosos Estados que son: Jalisco y Michoacán. El primero es donde nací y el segundo donde crecí y actualmente radico.
        Me dedico a dar clases y a componer, esto fue un don que Dios me regalo porque no tengo estudios que me respalden, soy empírico, esto fue desgastante pero nunca me rendí; lo único que te puedo decir es que no abandones tus sueños y metas. </p>
  </div>
  <div class="col col-lg-6 col-12 mb-2 text-center">
    <img src="images/bio.png" class="img-fluid mt-4" alt="foto biografia" />
  </div>
</div>
<!-- end row -->
<div id="divContact" class="row row-custom">
  <div class="col col-lg-5 col-12" style="background:#111;border:4px solid #111;">
    <h1 class="mb-4 mt-5 text-center text-light cursive-custom" style="border-bottom:1px solid #fff;">CONTACTO</h1>
    <p class="text-justify align-middle text-light font-custom mb-4">Si deseas ponerte en contacto conmigo para contrataciones, eventos o simplemente quieres saludar puedes contactarme a travéz de mi correo eléctronio y/o teléfono, o si lo prefieres dejame un mensaje, te atenderé a la brevedad</p>
    <ul class="ul-custom text-secondary mt-1">
      <li><a href="mailto: domisol_alrja@hotmail.com"><span class="material-icons align-middle">email</span> domisol_alrja@hotmail.com</a></li>
      <li><a href="tel: 3531103303"><span class="material-icons align-middle">local_phone</span> 3531103303</a></li>
    </ul>
    <p class="text-justify align-middle text-light font-custom mb-4 d-none">También puedes contactarme para contrataciones de los siguientes artistas:</p>
    <div class="row d-none">
      <div class="col col-md-6 col-12 text-center mb-2">
        <figure>
          <a href="images/cantante-12.jpg" data-lightbox="roadtrip" title="Miguel Zalazar"><img src="images/cantante-1.jpg" class="img-fluid rounded" style="max-height:420px;height:200px;" alt="Miguel Zalazar" /></a>
          <figcaption><span class="cursive-custom text-light h5">Miguel Zalazar</span></figcaption>
        </figure>
      </div>
      <div class="col col-md-6 col-12 text-center mb-2">
        <figure>
        <a href="images/cantante-22.jpg" data-lightbox="roadtrip" title="Franco Lezama"> <img src="images/cantante-2.jpg" class="img-fluid rounded-circle" style="max-height:420px;height:200px;" alt="Miguel Zalazar" /></a>
          <figcaption><span class="cursive-custom text-light h5">Franco Lezama</span></figcaption>
        </figure>
      </div>
    </div>
  </div>
  <div class="col col-lg-7 col-12 text-light" style="border-top:4px solid #111;border-bottom:4px solid #111;background:#000;">
    <form id="frmContact" action="contact-us" method="post" class="mt-4">
      {{csrf_field()}}
      <div class="form-group">
        <label for="txtName">Tu nombre</label>
        <input type="text" id="txtName" name="firstname" class="form-control form-control-lg" autocomplete="off" maxlength="50" required />
      </div>
      <div class="form-group">
        <label for="txtEmail">Tu correo eléctronico</label>
        <input type="email" id="txtEmail" name="email" class="form-control form-control-lg" maxlength="50" autocomplete="off" required />
      </div>
      <div class="form-group">
        <label for="txtPhone">Teléfono</label>
        <input type="text" id="txtPhone" name="phone" autocomplete="off" minlength="10" maxlength="12" class="form-control form-control-lg" />
      </div>
      <div class="form-group">
        <label for="txtSubject">Asunto</label>
        <input type="text" id="txtSubject" name="subject" autocomplete="off" maxlength="50" class="form-control form-control-lg" required />
      </div>
      <div class="form-group mb-2">
        <label for="txtName">Mensaje</label>
        <textarea id="txtName" cols="30" name="message" rows="4" class="form-control form-control-lg" maxlength="250" required></textarea>
      </div>
      <div class="col col-12 no-padding">
        <button id="btnSubmit" type="submit" class="btn btn-danger btn-lg float-right">Enviar</button>
      </div>
    </form>
  </div>
</div>
<!-- end row -->

@endsection

