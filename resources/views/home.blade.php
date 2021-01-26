@extends('layouts.site')

@section('content')
<div class="container">
  <div class="row">
    <div class="col col-lg-4 col-md-6 col-12 text-center">
      <img class="img-fluid align-middle" src="./images/logo.png" alt="logo" />
    </div>
    <div class="col col-lg-8 col-md-6 col-12 text-center">
      <video autoplay muted loop id="myVideo">
        <source src="video/video.mp4" type="video/mp4">
      </video>
    </div>
  </div>
</div>
@endsection

