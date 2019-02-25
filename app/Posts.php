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
    public function tags(){

        return $this->belongsToMany('App\Tag');
    }
}
