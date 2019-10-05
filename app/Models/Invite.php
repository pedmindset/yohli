<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DigitalCloud\ModelNotes\HasNotes;

class Invite extends Model
{
    use HasNotes;

    /**
    * @var  string
    */
    protected $table = 'invites';

    protected $casts = [
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
    ];

    public function profile()
    {
        return $this->belongsTo('App\Models\Profile', 'profile_id', 'id');
    }
    public function job()
    {
        return $this->belongsTo('App\Models\Job', 'job_id', 'id');
    }

    public function attachments()
    {
        return $this->hasMany('App\Models\Attachment');
    }
}