<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //
    protected $fillable = ['title', 'description', 'category'];

    public function category(){

        return $this->belongsTo('App\Category');

    }
  /* public function tags(){

        return $this->belongsToMany('App\Tag');
    }*/

    public function comment(){

        return $this->morphMany('App\Comment', 'commentable');
    }

    public function tags(){
        return $this->morphToMany('App\Tag', 'taggable');
    }


}
