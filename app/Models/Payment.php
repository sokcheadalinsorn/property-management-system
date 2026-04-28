<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    protected $primaryKey = 'id';

    protected $fillable = [
        'amount',
        'payment_date',
        'status',
        'created_at',
        'update_at',
    ];

    // Relationship many payments has one leases
    
    public function leases()
    {
        return $this->ManyHasOne(Lease::class);
    }
    

}
