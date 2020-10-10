<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'category_id','user_id','page_id','title','file','status'
    ];
    public function page(){
        return $this->belongsTo('App\Page');
    }
    public function category(){
        return $this->belongsTo('App\Category');
    }
}
