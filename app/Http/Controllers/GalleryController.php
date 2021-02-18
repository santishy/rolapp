<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use App\Http\Resources\GalleryResource;
use Illuminate\Support\Facades\Storage;

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
			'title' => ['required', 'unique:galleries,title'],
			'image' => ['required', 'image']
		], [
			'title.required' => 'El título es requerido',
			'title.unique'   => 'Ese títutlo ya existe en la base de datos',
			'image.required' => 'La imagen es requerida.',
			'image.image'    => 'El archivo debe ser una imagen.'
		]);
		$gallery = new Gallery();
		$gallery->title = $request->title;
		$gallery->image = $request->file('image')->store('images');
		$gallery->save();
		return GalleryResource::make($gallery);
	}

	public function destroy(Gallery $item)
	{
		Storage::delete($item->image);
		return response()->json([
			'data' => $item->delete()
		]);
	}
}
