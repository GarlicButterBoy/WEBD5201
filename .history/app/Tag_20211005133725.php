<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts()
    {
        //M:M Relationship
        return $this->belongsToMany(Tag::class);
    }
}
