<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{

    /**
    * @var  string
    */
    protected $table = 'attachments';

    protected $casts = [
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
    ];

    public function attachment_type()
    {
        return $this->belongsTo('App\Models\AttachmentType', 'attachment_types_id', 'id');
    }

    public function profile()
    {
        return $this->belongsTo('App\Models\Profile');
    }

    public function job()
    {
        return $this->belongsTo('App\Models\Job');
    }

    public function invite()
    {
        return $this->belongsTo('App\Models\Invite');
    }

}