<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected $table = 'maintenances';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'description',
        'status',
        'created_at',
        'updated_at',
    ];
}
