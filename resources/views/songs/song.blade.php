<div class="col col-lg-4 col-md-6 col-12 mb-4">
	<div class="card">
		<div class="card-header bg-dark text-light">
			<h5 class="card-title text-center">{{$product->title}}</h5>
		</div>
		<div class="card-body">
			<audio controls style="width:100%;">
				<source src="{{$product->file}}" type="audio/mpeg">
				Your browser does not support the audio element.
			</audio>
		</div>
		<div class="card-footer">
			<p class="h5">Genero: {{is_null($product->musical_genre) || is_empty($product->musical_genre) ? 'Sin género asignado' : $product->musical_genre }}</p>
			<p class="mt-2 card-text text-dark font-weight-bold text-justify d-none">{{$product->description}}</p>
		</div>
	</div>
</div>

