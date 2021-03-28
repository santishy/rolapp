@extends('layouts.site')
@section('title','Jorge Alberto Alejandre Videos')

@section('content')
<div class="container">
	<div class="row">
		<div class="col col-12 text-center">
			<h1 class="mb-4 cursive-custom text-light border-bottom">VIDEOS</h1>
		</div>
	</div>
	<div class="row">
		@foreach($videos as $video)
			@include('videos.video',['video' => $video])
		@endforeach
	</div>
	<!--{{ $videos->links() }}-->
</div>
@endsection