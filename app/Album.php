<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable=['name','musical_genre'];

    public function songs() {
        return $this->hasMany(Product::class);
    }
}
