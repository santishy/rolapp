@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-5">
            <form-product 
                :product="{{json_encode($product)}}" 
                method="put" 
                url="/products/{{$product->id}}"
            >
            </form-product>
            </div>
        </div>
    </div>
@endsection