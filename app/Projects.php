<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $fillable = [
        'job_name', 'cost', 'description', 'start_date', 'end_date', 'location', 'client_id', 'client_name', 'client_email', 'cline_pnumber', 'status',
    ];
}
