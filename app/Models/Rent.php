<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
     protected $table = 'rents';

    protected $primaryKey = 'id';

    protected $fillable = [
     'end_day',
     'start_day',
    ];
}
