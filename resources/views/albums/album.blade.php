<div class="row mb-4">
    <div class="col col-12">
			<h2 class="cursive-custom text-light h1">{{ $album->name }}</h2>
			<h3 class="cursive-custom text-light h5">Género: {{ $album->musical_genre }}</h3>
		</div>
		@foreach($album->songs as $song)
			<div class="col col-lg-3 col-md-4 col-sm-6 col-12 mb-4" title="{{$song->description}}">
				<div class="card">
					<div class="card-header bg-dark text-light">
						<h5 class="card-title text-center h6" style="white-space: nowrap;overflow:hidden;">{{$song->description}}</h5>
					</div>
					<div class="card-body">
						<audio class="custom-audio" data-id="{{$song->id}}" controls style="width:100%;">
							<source src="storage/{{ $song->file }}" type="audio/mpeg">
							Tu navegador no soporta el elementos de audio
						</audio>
					</div>
					<div class="card-footer">
						<p class="mt-2 card-text text-dark font-weight-bold text-justify h6 d-none">{{$song->description}}</p>
						@if ($album->is_religious)
							<a href="storage/{{ $song->file }}" class="btn btn-success btn-block mt-4" download> Descargar</a>
						@endif
					</div>
				</div>
			</div>
		@endforeach
</div>
