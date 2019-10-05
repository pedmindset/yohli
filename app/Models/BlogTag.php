<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogTag extends Model
{

    /**
    * @var  string
    */
    protected $table = 'blog_tags';

    protected $casts = [
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
    ];

    public function posts()
    {
        return $this->belongsToMany('App\Models\BlogPost');
    }

}