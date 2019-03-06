<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $fillable = ['name'];

   /* public function posts(){

        return $this->belongsToMany('App\Posts');
    }*/

    public function posts(){

        return $this->morphedByMany('App\Posts', 'taggable');
    }
    public function tutorie(){
        return $this->morphedByMany('App\Tutoriel', 'taggable');
    }
}
