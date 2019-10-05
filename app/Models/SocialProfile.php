<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;

class SocialProfile extends Model implements HasMedia
{
    use HasMediaTrait;

    /**
    * @var  string
    */
    protected $table = 'social_profiles';

    protected $casts = [
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
    ];

    public function profiles()
    {
        return $this->hasMany('App\Models\SocialLink');
    }

}