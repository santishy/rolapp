<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideoController extends Controller
{
	//
	public function index()
	{
		if(request()->wantsJson())
        {
            return Video::orderByDesc('id')->paginate(25);
        }
		//return view('videos.index'); //['videos' => Video::paginate(20)]
		return view('videos.index');
		//return view('videos.index', ['videos' => Video::paginate(20)]);
	}

	public function custom()
	{
		return view('videos.aux');
	}

	public function create()
	{
		return view('dashboard.videos.create');
	}

	public function store(Request $request)
	{
		$request->validate([
			//'title' => ['unique:videos,title'],
			'video' => ['required']
		], [
			'required' => 'El campo es requerido',
			//'unique' => 'El título ya existe en la base de datos.'
		]);

		return Video::create([
			'title' => $request->title,
			'video' => $request->video
		]);
	}

	public function destroy(Video $item){
		return response()->json([
			'data' => $item->delete()]);
	}
}
