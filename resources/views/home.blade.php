@extends('layouts.site')

@section('content')
<div class="container-fluid mt-4">
  <div id="divHome" class="row row-custom">
    <div class="col col-lg-4 col-md-6 col-12 text-center">
      <img class="img-fluid align-middle" src="./images/logo.png" alt="logo" />
    </div>
    <div class="col col-lg-8 col-md-6 col-12 text-center">
      <video autoplay muted loop id="myVideo">
        <source src="video/video.mp4" type="video/mp4">
      </video>
    </div>
  </div>
  <!-- end row --> 
  <div id="divBiography" class="row row-custom">
    <div class="col col-12" style="background:#ddd;">
      Biografía
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex voluptas quisquam impedit, consectetur rerum modi error ratione dolore recusandae cupiditate nobis reiciendis consequatur saepe quod perferendis amet tempore optio. Fugiat.
    </div>
  </div>
  <!-- end row -->
  <div id="divContact" class="row row-custom" style="background:#444;">
    <div class="col col-12">
      contacto
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati aut dolore perferendis quod asperiores cupiditate rerum temporibus libero, quidem nobis numquam, molestiae laudantium facilis soluta veniam non reiciendis placeat ipsum!
    </div>
  </div>
  <!-- end row -->
  <footer>
    <p>pie de pagina</p>
  </footer>
</div>
<!-- end container -->
@endsection

