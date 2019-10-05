<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

/**
* @var  string
*/
protected $table = 'countries';

protected $casts = [
'created_at' => 'datetime',
'updated_at' => 'datetime',
];

}