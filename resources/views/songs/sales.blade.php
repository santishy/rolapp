@extends('layouts.site')
@section('title','Jorge Albero Alejandre Canciones')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col col-12 text-center">
            <h1 class="mb-4 cursive-custom text-light border-bottom">DESCARGA</h1>
        </div>
				<!--<div class="col col-12 mb-5 d-none">
					<div class="card">
						<h5 class="card-title text-center mt-2 font-weight-bold">MIX DE MUESTRA</h5>
						<div class="card-body">
							<audio class="custom-audio" data-id="0" controls style="width:100%;">
								<source src="canciones/nuevo-mix.mp3" type="audio/mpeg">
							 Tu navegador no soporta elementos de audio.
							</audio>
						</div>
						<div class="card-footer">
							<p>Las canciones se reproducen en el orden que se muestran a continuación.</p>
						</div>
					</div>
				</div>-->
        @foreach((object)$albums->resolve() as $album)
					@foreach ($album['products'] as $product )
						<div class="col col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
								<div class="card">
									<div class="card-header bg-dark text-light">
											<h5 class="card-title text-center">{{$product->title}}</h5>
									</div>
									<div class="card-body">
										<audio class="custom-audio" data-id="{{$product->id}}" controls style="width:100%;">
											<source src="storage/{{ $product->file }}" type="audio/mpeg">
												Tu navegador no soporta el elementos de audio
										</audio>	
										<!--<p class="text-center mt-2 font-weight-bold d-none">COSTO: @money($product->price)</p>-->
									</div>
								</div>
								<div class="card-footer pl-0 pr-0">
								<p class="mt-2 card-text text-dark font-weight-bold text-justify h6 d-none">{{$product->description}}</p>
								<a href="storage/{{ $product->file }}" class="btn btn-success btn-block mt-4" download> Descargar</a>
									<!--<p class="text-center text-light d-none">${{$product->price}}</p>
									<form action="{{-- route('payments.pay' --)}}" method="POST">
											<input type="hidden" value="{{-- $product->price --}}" name="value">
											<input type="hidden" value="{{-- $product->id --}}" name="product_id">
											@csrf
											<button class="btn btn-paypal btn-block font-weight-bold float-right" type="submit"><i class="fa fa-paypal" aria-hidden="true"></i> COMPRAR</button>
									</form>-->
								</div>
						</div>
					@endforeach
        @endforeach
    </div>
</div>


@endsection