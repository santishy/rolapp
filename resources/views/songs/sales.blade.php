@extends('layouts.site')
@section('title','Jorge Albero Alejandre Canciones')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col col-12 text-center">
            <h1 class="mb-4 cursive-custom text-light border-bottom">TIENDA</h1>
        </div>
        @foreach((object)$albums->resolve() as $album)
					@foreach ($album['products'] as $product )
						<div class="col col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
								<div class="card">
									<div class="card-header bg-dark text-light">
											<h5 class="card-title text-center">{{$product->title}}</h5>
									</div>
									<div class="card-body">
											<audio class="custom-audio d-none" controls style="width:100%;" controlsList="nodownload">
													<source src="{{$product->file}}" type="audio/mpeg">
													Your browser does not support the audio element.
											</audio>
											<p class="text-center mt-2 font-weight-bold">COSTO: @money($product->price)</p>
									</div>
								</div>
								<div class="card-footer pl-0 pr-0">
									<p class="text-center text-light d-none">${{$product->price}}</p>
									<form action="{{route('payments.pay')}}" method="POST">
											<input type="hidden" value="{{$product->price}}" name="value">
											<input type="hidden" value="{{$product->id}}" name="product_id">
											@csrf
											<button class="btn btn-success btn-block font-weight-bold float-right" type="submit"><i class="fa fa-paypal" aria-hidden="true"></i> COMPRAR</button>
									</form>
								</div>
						</div>
					@endforeach
        @endforeach
    </div>
</div>


@endsection