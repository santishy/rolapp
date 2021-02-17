<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

class GalleryController extends Controller
{
    //
		public function index() {
			return view('galleries.index',['galleries' => Gallery::paginate(20)]);
		}
}
