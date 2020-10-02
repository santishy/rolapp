@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <form-product method="post" url="/products/store"></form-product>
            </div>
            <div class="col-md-4">
                <show-product></show-product>
            </div>
           
        </div>
    </div>
@endsection