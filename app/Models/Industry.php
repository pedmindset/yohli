<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Industry extends Model implements HasMedia
{
    use HasMediaTrait;

/**
* @var  string
*/
protected $table = 'industries';

protected $casts = [
'created_at' => 'datetime',
'updated_at' => 'datetime',
];


public function profiles()
{
    return $this->belongsToMany('App\Models\Profile');
}

public function job()
{
    return $this->belongsTo('App\Models\Job');
}


}