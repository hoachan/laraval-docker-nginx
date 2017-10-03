<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //

    public function isComplete(){
        return false;
    }

    public function archive(){
        return true;

    }

    public  function scopeIncomplete($query){   //Task : incomplete()
        return $query->where('isComplete', 1);
    }
}
