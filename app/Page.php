<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //

    protected $fillable = [
        'page_name','description','status'
    ];
}
