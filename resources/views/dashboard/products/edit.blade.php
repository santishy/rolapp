@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
            <form-product 
                :product="{{json_encode($product)}}" 
                :albums="{{json_encode($albums)}}"
                method="put" 
                url="/products/{{$product->id}}"
            >
            </form-product>
            </div>
        </div>
    </div>
@endsection