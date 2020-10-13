<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable=['id','status','total','product_id','email'];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
