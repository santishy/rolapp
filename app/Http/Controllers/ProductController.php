<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
        return view('dashboard.products.create');
    }

    public function store(){
        return request()->all();
    }
}
