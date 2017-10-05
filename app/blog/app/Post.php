<?php

namespace App;

class Post extends Model
{
    public function comments(){
        //can be write with $this->hasMany(\App\Comment)
        return $this->hasMany(Comment::class); 
    }

    public function addComment($body){

        $this->validate(request(), ['body' => 'required|min:2']);
        $this->comments()->create(compact('body'));
    }
}
