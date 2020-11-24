@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center  align-items-center vh-100">
            <div class="col-md-6 h-50">
                <p style="font-size:2em" class="font-weight-bold border-bottom  border-primary px-4 py-2">
                    Bienvenido {{auth()->user()->name}}
                </p>
            </div>
        </div>   
    </div>    
@endsection