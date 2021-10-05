<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function tags()
    {
        //M:M Relationship
        return $this->belongsToMany(Tag::class);
    }
}
