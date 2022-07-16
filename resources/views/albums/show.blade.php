@extends('layouts.site')
@section('title','Jorge Alberto Alejandre Canciones')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col col-12 text-center">
			<h1 class="mb-4 cursive-custom text-light border-bottom">{{$album->name}}</h1>
		</div>
	</div>
	<div class="row">
		<div class="col col-12">
			{{$album->name}}
		</div>
		<!-- col-12 -->
	</div>
	<!-- row -->
</div>

@endsection