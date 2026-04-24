<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lease extends Model
{
    protected $table = 'leases';

    protected $primaryKey = 'id';   

    protected $fillable = [
        'tenant_name',
        'unit',
        'start_date',
        'end_date',
        'monthly_rent', 
        'desposit',
    ];

    // Relationship One leases has One tenants
    public function tenants()
    {
        return $this->HasOne(Tenant::class);
    }
}
