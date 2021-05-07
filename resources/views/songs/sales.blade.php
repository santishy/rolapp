@extends('layouts.site')
@section('title','Jorge Albero Alejandre Canciones')

@section('content')

<div class="container">
    <div class="row">
        <div class="col col-12 text-center">
            <h1 class="mb-4 cursive-custom text-light border-bottom">CANCIONES</h1>
        </div>
        @foreach((object)$albums->resolve() as $album)
        <div>
            album : {{$album['name']}} | genero: {{$album['musical_genre']}}
        </div>
            
            @foreach ($album['products'] as $product )
                <div class="col col-lg-4 col-md-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-header bg-dark text-light">
                            <h5 class="card-title text-center">{{$product->title}}</h5>
                        </div>
                        <div class="card-body">
                            <audio class="custom-audio" controls style="width:100%;">
                                <source src="{{$product->file}}" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                    </div>
                    <div class="card-footer">
                        <form action="{{route('payments.pay')}}" method="POST">
                            <input type="hidden" value="{{$product->price}}" name="value">
                            <input type="hidden" value="{{$product->id}}" name="product_id">
                            @csrf
                            <button class="btn btn-default" type="submit">PAYPAL</button>
                        </form>
                    </div>
                </div>
            @endforeach
        @endforeach
    </div>
</div>


@endsection