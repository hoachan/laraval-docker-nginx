<?php

namespace App;

class Post extends Model
{
    public function comments(){
        //can be write with $this->hasMany(\App\Comment)
        return $this->hasMany(Comment::class); 
    }

}
