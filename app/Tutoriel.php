<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutoriel extends Model
{
    //
    public function comment(){

        return $this->morphMany('App\Comment', 'commentable');
    }

    public function tags(){
        return $this->morphToMany('App\Tag', 'taggable');
    }

}
