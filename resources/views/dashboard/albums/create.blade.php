@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <form-album></form-album>
            </div>
            <div class="col-md-8">
                <list-album></list-album>
            </div>
        </div>
    </div>
@endsection