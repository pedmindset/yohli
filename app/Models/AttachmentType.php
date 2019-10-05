<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttachmentType extends Model
{

    /**
    * @var  string
    */
    protected $table = 'attachment_types';

    protected $casts = [
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
    ];

}