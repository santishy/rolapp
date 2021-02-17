<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideoController extends Controller
{
    //
		public function index() {
			return view('videos.index',['videos' => Video::paginate(20)]);
		}
}
