<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    //
    protected $fillable = [
        'title','post_description','status'
    ];
}
