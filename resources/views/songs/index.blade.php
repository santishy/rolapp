@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @foreach($songs as $song)
                    @include('payments.paypal',['product' => $song]);
                @endforeach
            </div>
        </div>
    </div>
@endsection