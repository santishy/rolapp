@extends('layouts.site')
@section('title','Jorge Albero Alejandre Canciones')

@section('content')
<div class="container">
	<div class="row">
		<div class="col col-12 text-center">
			<h1 class="mb-4 cursive-custom text-light border-bottom">GALERÍA</h1>
		</div>
	</div>
	<div class="d-flex flex-row">
		@foreach($galleries as $gallery)
			@include('galleries.gallery',['photo' => $gallery])
		@endforeach
	</div>
	<!-- row -->
	{{ $galleries->links() }}
</div>
@endsection