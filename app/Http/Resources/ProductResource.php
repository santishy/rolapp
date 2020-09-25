<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'lyrics' => $this->lyrics,
            'price' => $this->price,
            'formatted_price' => "$".number_format($this->price,2),
            'file_uri' => $this->file
        ];
    }
}
