<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobBudget extends Model
{

/**
* @var  string
*/
protected $table = 'job_budgets';

protected $casts = [
'created_at' => 'datetime',
'updated_at' => 'datetime',
];

}