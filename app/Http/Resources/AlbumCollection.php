<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class AlbumCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->collection->transform(function($album){
            return [
                'name' => $album->name,
                'musical_genre' => $album->musical_genre,
                'products' => ProductResource::collection($album->songs)
            ]; 
        });
    }
}
