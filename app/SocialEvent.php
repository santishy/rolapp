<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialEvent extends Model
{
    protected $fillable=['place','city','event_date','hour','description','status'];
}
