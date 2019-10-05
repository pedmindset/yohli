<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use DigitalCloud\ModelNotes\HasNotes;

class BlogPost extends Model implements HasMedia
{
    use HasMediaTrait, HasNotes;

    /**
    * @var  string
    */
    protected $table = 'blog_posts';

    protected $casts = [
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
    ];
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\BlogTag');
    }

    public function categtories()
    {
        return $this->belongsToMany('App\Models\BlogCategory');
    }

}