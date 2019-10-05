<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{

/**
* @var  string
*/
protected $table = 'skills';

protected $casts = [
'created_at' => 'datetime',
'updated_at' => 'datetime',
];

public function profiles()
{
    return $this->belongsToMany('App\Models\Profile');
}

public function jobs()
{
    return $this->belongsToMany('App\Models\Job');
}

}