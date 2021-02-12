<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Payment;
use Illuminate\Support\Facades\Storage;

class SongsController extends Controller
{
    public function index(){
      return view('songs.index',['songs' => Product::paginate(15)]);
    }

    public function show(Payment $payment){
        $product = $payment->product;
        if($payment->downloads > 0){
            $payment->downloads -= 1;
            $payment->save(); 
            return Storage::download($product->file);
        }
        return 'Excediste el numero de descargas de tu compra';
    }
}
