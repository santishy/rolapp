<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AlbumResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'name' => $this->resource->name,
            'musical_genre' => $this->resource->musical_genre,
            'products' => ProductResource::collection($this->resource->songs)
        ]; 
    }
}
