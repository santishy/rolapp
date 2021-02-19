<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['lyrics', 'title', 'album_id','description', 'price', 'file','musical_genre'];

    public function storeFile()
    {
        return request()->file('file')->storeAs('public/songs', request()->file->getClientOriginalName());
    }

    public function mergeRequest($data)
    {
        return array_merge(
            request()->all(),
            $data
        );
    }
}
