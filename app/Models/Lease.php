<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lease extends Model
{
    protected $table = 'leases';

    protected $primaryKey = 'id';   

    protected $fillable = [
        'start_date',
        'end_at',
        'status',
        'created_at',
    ];
}
