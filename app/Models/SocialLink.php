<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialLink extends Model
{

    /**
    * @var  string
    */
    protected $table = 'social_links';

    protected $casts = [
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
    ];

    public function social_profile()
    {
        return $this->belongsTo('App\Models\SocialProfile', 'social_profile_id', 'id');
    }

    public function profile()
    {
        return $this->belongsTo('App\Models\Profile', 'profile_id', 'id');
    }
}