<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Post extends Model
{
    //protected $fillable = ['title', 'body']; //Specify fields we want to be allowed
    protected $guarded = []; //Specify fields we DONT want to allow

}