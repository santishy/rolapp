<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{

    public function index()
    {
        if (request()->wantsJson()) {
            return Album::orderByDesc('id')->paginate(25);
        }
        return view('albums.index', ['albums' => Album::with('songs')->where('is_religious',false)->where('is_premium',false)->paginate(20)]);
        //return view('albums.aux');
    }

    public function create()
    {
        return view('dashboard.albums.create');
    }

    public function religious() {
        $albums = Album::with('songs')->where('is_religious',true)->get();
        return view('albums.religious', ['albums' => $albums]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'unique:albums,name'],
            'musical_genre' => ['required']
        ], [
            'required' => 'El campo es requerido',
            'unique' => 'El nombre ya existe en la base de datos.'
        ]);

        return Album::create([
            'name' => $request->name,
            'musical_genre' => $request->musical_genre
        ]);
    }

    public function destroy(Album $item)
    {
        return response()->json([
            'data' => $item->delete()
        ]);
    }
}
