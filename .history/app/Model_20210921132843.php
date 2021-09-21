<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Post extends Eloquent
{
    //protected $fillable = ['title', 'body']; //Specify fields we want to be allowed
    protected $guarded = []; //Specify fields we DONT want to allow

}