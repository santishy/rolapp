@extends('layouts.site')
@section('title','Jorge Albero Alejandre Canciones')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col col-12 text-center">
				<h1 class="mb-4 cursive-custom text-light border-bottom">TIENDA</h1>
			</div>
			@foreach($songs as $song)
				@include('songs.song',['product' => $song])
			@endforeach
		</div>
	</div>

	{{ $songs->links() }}
@endsection