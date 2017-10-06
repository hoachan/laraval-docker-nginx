<?php

namespace App;

class Post extends Model
{
    public function comments(){
        //can be write with $this->hasMany(\App\Comment)
        return $this->hasMany(Comment::class); 
    }

    //$post->user or $comment->post->user
    public function user(){  
        return $this->belongsTo(User::class);
    }

    public function addComment($body){

        $this->validate(request(), ['body' => 'required|min:2']);
        $this->comments()->create(compact('body'));
    }
}
