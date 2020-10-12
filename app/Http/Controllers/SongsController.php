<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SongsController extends Controller
{
    public function index(){
        return view('songs.index',['songs' => Product::paginate(15)]);
    }
}
