<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'properties';

    protected $primaryKey = 'id';

    protected $fillable = [
       'name',
       'address', 
       'created_at',
       'updated_at',
    ];
}
