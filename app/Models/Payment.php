<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'paymants';

    protected $primaryKey = 'id';

    protected $fillable = [
        'amount',
        'payment_date',
        'status',
        'created_at',
        'update_at',
    ];

}
