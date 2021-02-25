<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * Get the post that owns the comment.
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

}
