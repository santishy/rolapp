<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function create(){
        return view('dashboard.products.create');
    }

    public function store(Request $request){
        $request->file->store('songs');
    }

    public function validateProduct($data){
        Validator::make($request->all(),
            [
                'title' => 'unique:products,title|required'
                'description'
            ] 
        );
    }
}
