<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'client_name', 'client_email', 'client_pnumber', 'client_id', 'client_address', 'job_name', 'cost', 
    ];
}
