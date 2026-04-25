<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'paymants';

    protected $primaryKey = 'id';

    protected $fillable = [
        'tenant_name',
        'unit',
        'amount',
        'month',
        'due_date',
        'created_at',
        'update_at',
    ];

    // Relationship many payments has one leases
    
    public function leases()
    {
        return $this->ManyHasOne(Lease::class);
    }
    

}
