@extends('layouts.site')
@section('title','Jorge Alberto Alejandre Canciones')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col col-12 text-center">
			<h1 class="mb-4 cursive-custom text-light border-bottom">ALBUMS</h1>
		</div>
	</div>
	<div class="row">
		<div class="col col-12">
			@foreach($albums as $album)
				@include('albums.album',['album' => $album])
			@endforeach
		</div>
		<!-- col-12 -->
	</div>
	<!-- row -->
	{{ $albums->links() }}
</div>
@endsection