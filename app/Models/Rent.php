<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    protected $table = 'rents';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name_house',
        'price',
    ];

    public function units ()
    {
        return $this->OneMany(Unit::class);
    }
}
