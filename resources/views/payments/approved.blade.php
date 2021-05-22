@extends('layouts.site')
@section('title','Jorge Albero Alejandre Canciones')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col col-12 col-custom-height text-center">
			<h1 class="alert alert-success text-center">GRACIAS POR TU COMPRA!</h1>
			<h2 class="text-center text-light">Te hemos enviado un correo eléctronico con las instrucciones para la descarga.</h2>
			<p class="text-center text-light">Si no recibiste el correo o tienes algún problema con la descarga no dudes en contactarnos.</p>
			<ul class="ul-custom text-secondary mt-1">
				<li><a href="mailto: domisol_alrja@hotmail.com"><span class="material-icons align-middle">email</span> domisol_alrja@hotmail.com</a></li>
				<li><a href="tel: 3531103303"><span class="material-icons align-middle">local_phone</span> 3531103303</a></li>
			</ul>
		</div>
	</div>
</div>

@endsection