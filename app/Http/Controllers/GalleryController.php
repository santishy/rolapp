<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

class GalleryController extends Controller
{
	//
	public function index()
	{
		return view('galleries.index', ['galleries' => Gallery::paginate(20)]);
	}

	public function create()
	{
		return view('dashboard.gallery.create');
	}

	public function store(Request $request)
	{
		$request->validate([
			'title' => ['required'],
			'image' => ['required', 'image']
		]);
		$gallery = new Gallery();
		$gallery->title = $request->title;
		$gallery->image = $request->file('image')->store('images');
		$gallery->save();
	}
}
