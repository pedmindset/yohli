<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{

    /**
    * @var  string
    */
    protected $table = 'bookmarks';

    protected $casts = [
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function profile()
    {
        return $this->belongsTo('App\Models\Profile');
    }
    public function job()
    {
        return $this->belongsTo('App\Models\Job');
    }
}