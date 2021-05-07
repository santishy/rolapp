<?php

namespace App\Http\Controllers;

use App\Album;
use App\Http\Resources\AlbumCollection;
use App\Http\Resources\AlbumResource;
use App\Payment;
use Illuminate\Support\Facades\Storage;

class SongsController extends Controller
{
    public function index()
    {

        $albunes = Album::with(
            [
                'songs' => function ($query) {
                    $query->where('price', '>', 0)
                        ->paginate(20);
                }
            ]
        )->paginate();
        $albums =  AlbumResource::collection($albunes);
     
        return view('songs.sales',compact('albums'));
    }

    public function show(Payment $payment)
    {
        $product = $payment->product;
        if ($payment->downloads > 0) {
            $payment->downloads -= 1;
            $payment->save();
            return Storage::download($product->file);
        }
        return 'Excediste el numero de descargas de tu compra';
    }
}
