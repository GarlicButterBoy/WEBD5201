<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //public function isComplete()
    //{
    //    return false;
    //}

    public  function incomplete()
    {
        return static::where('completed', 0)->get();
    }
}
