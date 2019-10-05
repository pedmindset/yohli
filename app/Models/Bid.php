<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DigitalCloud\ModelNotes\HasNotes;

class Bid extends Model
{
    use HasNotes;

    /**
    * @var  string
    */
    protected $table = 'bids';

    protected $casts = [
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
    public function job()
    {
        return $this->belongsTo('App\Models\Job', 'job_id', 'id');
    }
    public function profile()
    {
        return $this->belongsTo('App\Models\Profile', 'profile_id', 'id');
    }
}