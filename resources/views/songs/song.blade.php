<div class="col col-lg-6 col-md-4 col-12 mb-4">
	<div class="card">
		<div class="card-header bg-secondary text-light">
			<h5 class="card-title text-center">{{$product->title}}</h5>
		</div>
		<div class="card-body">
			<audio controls style="width:100%;">
				<source src="{{$product->file}}" type="audio/mpeg">
				Your browser does not support the audio element.
			</audio>
		</div>
		<div class="card-footer">
			<p class="mt-2 card-text text-dark font-weight-bold text-justify">{{$product->description}}</p>
		</div>
	</div>
</div>

