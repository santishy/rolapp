<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    /*public function index(){
        return ProductResource::collection(Product::all()-)
    }*/
    public function create()
    {
        return view('dashboard.products.create');
    }

    public function store(Request $request)
    {
        // if(!$request->hasFile('file')){
        //     return response()->json([
        //         'errors' => ['file' => 'El archivo es requerido'] 
        //     ],422);
        // }
        $this->validateProduct($request);
        return ProductResource::make(Product::create(
            array_merge($request->all(),[
                'file' => request()->file('file')->storeAs('public/songs', $request->file->getClientOriginalName())
            ])
        ));
    }

    public function validateProduct($request)
    {
        return $request->validate([
            'title' => 'unique:products,title|required',
            'description' => 'required',
            'file' => 'required|file|mimes:mpga,mp2,mp2a,mp3,m2a,m3a',
            'price' => 'required|numeric'
        ], [
            'description.required' => 'La descripción es requerida',
            'file.required' => 'El archivo de audio es requerido',
            'title.required' => 'El titulo es requerido',
            'title.unique' => 'El título ya existe en la base de datos',
            'price.required' => 'El precio es requerido',
            'price.numeric' => 'El precio debe ser un valor númerico',
            'file.file' => 'El archivo de audio debe ser archivo',
            'file.mimes' => 'El archivo no tiene un formato valido'
        ]);
    }
}
