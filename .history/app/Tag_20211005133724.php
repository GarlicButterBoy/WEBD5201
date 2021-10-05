<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function post()
    {
        //M:M Relationship
        return $this->belongsToMany(Tag::class);
    }
}
