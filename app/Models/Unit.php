<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = 'units';

    protected $primaryKey = 'id';

    protected $fillable = [
        'unit_number',
        'rent_price',
        'status',
        'created_at',
        'updated_at',
    ];
}
