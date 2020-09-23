<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function create()
    {
        return view('dashboard.products.create');
    }

    public function store(Request $request)
    {
        $this->validateProduct($request);
        $request->file = $request->file->store('songs');
        return response()->json([
            'product' =>  Product::create($request->all())
        ]);
    }

    public function validateProduct($request)
    {
        return $request->validate([
            'title' => 'unique:products,title|required',
            'description' => 'required',
            'file' => 'required|file|mimes:mpga,mp2,mp2a,mp3,m2a,m3a',
            'price' => 'required|Numeric'
        ]);
    }
}
